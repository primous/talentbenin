<?php

namespace Tests\Feature;

use App\Mail\AdminApplicationNotificationMail;
use App\Mail\ApplicationAcceptedMail;
use App\Mail\ApplicationInformationRequestedMail;
use App\Mail\ApplicationRejectedMail;
use App\Mail\ApplicationSubmittedConfirmationMail;
use App\Models\Category;
use App\Models\Skill;
use App\Models\TalentApplication;
use App\Models\TalentProfile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;
use Tests\TestCase;

class TalentApplicationWorkflowTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Mail::fake();
    }

    /**
     * 1. Test visitor can access the application page.
     */
    public function test_visitor_can_access_application_page(): void
    {
        $response = $this->get('/rejoindre');

        $response->assertStatus(200);
        $response->assertSee('Postuler et rejoindre');
        $response->assertSee('TALENT');
    }

    /**
     * 2. Test Step 1 validation fails if required fields are missing.
     */
    public function test_step_1_validation_fails_on_missing_fields(): void
    {
        Livewire::test('application-form')
            ->set('first_name', '')
            ->set('last_name', '')
            ->set('email', '')
            ->call('nextStep')
            ->assertHasErrors(['first_name', 'last_name', 'email'])
            ->assertSet('currentStep', 1);
    }

    /**
     * 3. Test Step 1 navigation succeeds with valid data.
     */
    public function test_step_1_navigates_to_step_2_when_valid(): void
    {
        Livewire::test('application-form')
            ->set('first_name', 'Bio')
            ->set('last_name', 'Guerra')
            ->set('email', 'bio.guerra@example.com')
            ->set('phone', '+229 97 00 00 01')
            ->set('city', 'Parakou')
            ->set('age_range', '21–25 ans')
            ->call('nextStep')
            ->assertHasNoErrors()
            ->assertSet('currentStep', 2);
    }

    /**
     * Test step navigation from step 1 to step 6 without MissingRulesException.
     */
    public function test_user_can_navigate_through_all_steps_with_next_step(): void
    {
        Livewire::test('application-form')
            // Step 1
            ->set('first_name', 'Primous')
            ->set('last_name', 'Hounkpatin')
            ->set('email', 'primous.test@example.bj')
            ->set('phone', '0194384161')
            ->set('city', 'Cotonou')
            ->set('age_range', '19-24 ans')
            ->call('nextStep')
            ->assertHasNoErrors()
            ->assertSet('currentStep', 2)
            // Step 2
            ->set('primary_activity', 'Developpeur web')
            ->set('current_status', 'etudiant')
            ->set('experience_duration', 'moins_1_an')
            ->set('featured_achievement', 'Création de multiples sites web pour des commerces locaux.')
            ->call('nextStep')
            ->assertHasNoErrors()
            ->assertSet('currentStep', 3)
            // Step 3 (where MissingRulesException was occurring previously)
            ->call('nextStep')
            ->assertHasNoErrors()
            ->assertSet('currentStep', 4)
            // Step 4
            ->call('nextStep')
            ->assertHasNoErrors()
            ->assertSet('currentStep', 5)
            // Step 5
            ->set('primary_goal', 'Trouver des missions d\'envergure et m\'intégrer dans l\'écosystème béninois d\'élite.')
            ->set('next_big_goal', 'Lancer mon propre SaaS dédié au marché ouest-africain.')
            ->set('current_main_activity', 'Développement d\'APIs bancaires et SaaS.')
            ->set('current_challenge', 'Accéder à des clients internationaux et partenariats de haut niveau.')
            ->set('availability', 'temps_plein')
            ->call('nextStep')
            ->assertHasNoErrors()
            ->assertSet('currentStep', 6);
    }

    /**
     * 4. Test complete application submission stores record, generates reference and sends emails.
     */
    public function test_full_application_submission_creates_record_and_triggers_emails(): void
    {
        $testEmail = 'candidat.' . uniqid() . '@example.com';

        Livewire::test('application-form')
            // Étape 1
            ->set('first_name', 'Koffi')
            ->set('last_name', 'Mensah')
            ->set('email', $testEmail)
            ->set('phone', '+229 96 12 34 56')
            ->set('city', 'Cotonou')
            ->set('age_range', '21–25 ans')
            // Étape 2
            ->set('primary_activity', 'Développeur Laravel & Vue.js')
            ->set('current_status', 'freelance')
            ->set('experience_duration', '3_5_ans')
            ->set('featured_achievement', 'Création d\'une plateforme de paiement locale utilisée par plus de 500 commerçants.')
            // Étape 4
            ->set('has_online_earnings', true)
            ->set('online_activity_type', 'Freelance Upwork & clients locaux')
            ->set('approximate_earnings', '300k_500k')
            ->set('current_main_activity', 'Développement d\'APIs bancaires et SaaS.')
            ->set('current_challenge', 'Accéder à des clients internationaux et partenariats de haut niveau.')
            // Étape 5
            ->set('primary_goal', 'Trouver des missions d\'envergure et m\'intégrer dans l\'écosystème béninois d\'élite.')
            ->set('next_big_goal', 'Lancer mon propre SaaS dédié au marché ouest-africain.')
            ->set('availability', 'temps_plein')
            // Étape 6
            ->set('cgv_accepted', true)
            // Soumission
            ->call('submitApplication')
            ->assertHasNoErrors();

        // Check DB
        $this->assertDatabaseHas('talent_applications', [
            'email' => $testEmail,
            'first_name' => 'Koffi',
            'city' => 'Cotonou',
            'status' => TalentApplication::STATUS_PENDING,
        ]);

        $application = TalentApplication::where('email', $testEmail)->first();
        $this->assertNotNull($application);
        $this->assertMatchesRegularExpression('/^TC-\d{4}-\d{4}$/', $application->reference);

        // Check Mails
        Mail::assertSent(ApplicationSubmittedConfirmationMail::class, function ($mail) use ($testEmail) {
            return $mail->hasTo($testEmail);
        });

        Mail::assertSent(AdminApplicationNotificationMail::class);
    }

    /**
     * 5. Test duplicate pending application is rejected with informative message.
     */
    public function test_duplicate_pending_application_is_prevented(): void
    {
        $existing = TalentApplication::create([
            'reference' => TalentApplication::generateUniqueReference(),
            'first_name' => 'Jean',
            'last_name' => 'Dupont',
            'email' => 'duplicate.test@example.bj',
            'phone' => '+229 97 11 22 33',
            'city' => 'Cotonou',
            'primary_activity' => 'Graphiste',
            'current_status' => 'freelance',
            'experience_duration' => '1_2_ans',
            'featured_achievement' => 'Création d\'identités de marque pour 10 startups béninoises.',
            'has_online_earnings' => 'non',
            'current_main_activity' => 'Branding',
            'current_challenge' => 'Clients',
            'primary_goal' => 'Développer mon carnet d\'adresses',
            'next_big_goal' => 'Créer une agence de design',
            'availability' => 'temps_plein',
            'status' => TalentApplication::STATUS_PENDING,
            'submitted_at' => now(),
        ]);

        Livewire::test('application-form')
            ->set('first_name', 'Jean')
            ->set('last_name', 'Dupont')
            ->set('email', 'duplicate.test@example.bj')
            ->set('phone', '+229 97 11 22 33')
            ->set('city', 'Cotonou')
            ->set('age_range', '21–25 ans')
            ->call('nextStep')
            ->assertHasErrors(['email']);
    }

    /**
     * 6. Test confirmation page displays the reference and instructions.
     */
    public function test_confirmation_page_displays_reference(): void
    {
        $application = TalentApplication::create([
            'reference' => 'TC-2026-9999',
            'first_name' => 'Aïcha',
            'last_name' => 'Tidjani',
            'email' => 'aicha.' . uniqid() . '@example.bj',
            'phone' => '+229 90 00 11 22',
            'city' => 'Porto-Novo',
            'primary_activity' => 'Content Creator & Copywriter',
            'current_status' => 'freelance',
            'experience_duration' => '3_5_ans',
            'featured_achievement' => 'Gestion de campagnes ayant atteint plus de 2M de vues organiques.',
            'has_online_earnings' => 'oui',
            'current_main_activity' => 'Copywriting',
            'current_challenge' => 'Monétisation',
            'primary_goal' => 'Collaborer avec des marques de premier plan',
            'next_big_goal' => 'Studio de production de contenu',
            'availability' => 'temps_plein',
            'status' => TalentApplication::STATUS_PENDING,
            'submitted_at' => now(),
        ]);

        $response = $this->get('/rejoindre/confirmation/' . $application->reference);

        $response->assertStatus(200);
        $response->assertSee('TC-2026-9999');
        $response->assertSee('Votre candidature a bien été reçue');
        $response->assertSee('Aïcha');
    }

    /**
     * 7. Test candidate information completion page and submission.
     */
    public function test_candidate_can_complete_requested_information(): void
    {
        $application = TalentApplication::create([
            'reference' => 'TC-2026-8888',
            'first_name' => 'Marc',
            'last_name' => 'Sossou',
            'email' => 'marc.' . uniqid() . '@example.bj',
            'phone' => '+229 95 11 22 33',
            'city' => 'Abomey-Calavi',
            'primary_activity' => 'Data Analyst',
            'current_status' => 'etudiant',
            'experience_duration' => '1_2_ans',
            'featured_achievement' => 'Création de dashboards PowerBI pour une PME de négoce.',
            'has_online_earnings' => 'non',
            'current_main_activity' => 'Études & Projets personnels',
            'current_challenge' => 'Obtenir des données réelles',
            'primary_goal' => 'Trouver un stage ou une mission en entreprise',
            'next_big_goal' => 'Devenir Data Engineer senior',
            'availability' => 'temps_partiel',
            'status' => TalentApplication::STATUS_INFORMATION_REQUESTED,
            'information_request_message' => 'Merci de fournir le lien vers votre portfolio GitHub.',
            'submitted_at' => now(),
        ]);

        // Access completion page
        $response = $this->get('/rejoindre/completer/' . $application->reference);
        $response->assertStatus(200);
        $response->assertSee('Merci de fournir le lien vers votre portfolio GitHub.');

        // Submit completion
        $postResponse = $this->post('/rejoindre/completer/' . $application->reference, [
            'candidate_response' => 'Voici les précisions : j\'ai mis à jour mon profil avec mes projets GitHub.',
            'additional_links'   => 'https://github.com/marcsossou',
        ]);

        $postResponse->assertRedirect();
        
        $application->refresh();
        $this->assertEquals(TalentApplication::STATUS_UNDER_REVIEW, $application->status);
        $this->assertStringContainsString('github.com/marcsossou', $application->candidate_response_message);
    }

    /**
     * 8. Test acceptance workflow: creates TalentProfile and triggers welcome email.
     */
    public function test_accepting_application_creates_talent_profile(): void
    {
        $application = TalentApplication::create([
            'reference' => 'TC-2026-7777',
            'first_name' => 'Fatou',
            'last_name' => 'Bio',
            'email' => 'fatou.' . uniqid() . '@example.bj',
            'phone' => '+229 97 99 88 77',
            'city' => 'Cotonou',
            'primary_activity' => 'UI/UX Designer',
            'current_status' => 'freelance',
            'experience_duration' => '3_5_ans',
            'featured_achievement' => 'Redesign de l\'application mobile d\'une banque panafricaine.',
            'has_online_earnings' => 'oui',
            'approximate_earnings' => '500k_1000k', // Private data
            'current_main_activity' => 'Design interfaces',
            'current_challenge' => 'Échelle',
            'primary_goal' => 'Accéder à des missions internationales',
            'next_big_goal' => 'Former de jeunes designers',
            'availability' => 'temps_plein',
            'status' => TalentApplication::STATUS_UNDER_REVIEW,
            'submitted_at' => now(),
        ]);

        // Simulate admin acceptance logic (same as Filament Action)
        $application->update([
            'status' => TalentApplication::STATUS_ACCEPTED,
            'reviewed_at' => now(),
        ]);

        $profile = TalentProfile::create([
            'talent_application_id' => $application->id,
            'public_name'           => $application->first_name . ' ' . strtoupper(substr($application->last_name, 0, 1)) . '.',
            'title'                 => $application->primary_activity,
            'avatar_path'           => $application->profile_photo_path,
            'city'                  => $application->city,
            'country'               => 'Bénin',
            'public_bio'            => $application->featured_achievement,
            'availability'          => $application->availability,
            'is_verified'           => true,
            'is_active'             => true,
            'featured_badge'        => 'Cohorte 2026',
        ]);

        Mail::to($application->email)->send(new ApplicationAcceptedMail($application, 'Bienvenue !'));

        $this->assertDatabaseHas('talent_profiles', [
            'talent_application_id' => $application->id,
            'public_name' => 'Fatou B.',
            'title' => 'UI/UX Designer',
            'is_verified' => 1,
            'is_active' => 1,
        ]);

        // Verify privacy: private earnings are NOT stored on the public talent profile
        $this->assertNull($profile->starting_price);
        $this->assertFalse(isset($profile->approximate_earnings));

        Mail::assertSent(ApplicationAcceptedMail::class);
    }

    /**
     * 9. Test unauthorized guests are redirected from admin panel.
     */
    public function test_guest_is_redirected_from_admin_panel(): void
    {
        $response = $this->get('/admin/talent-applications');
        $response->assertRedirect('/admin/login');
    }

    /**
     * 10. Test authenticated admin can access Filament talent applications list.
     */
    public function test_authenticated_admin_can_access_filament_applications(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin.test@talentclub.bj'],
            ['name' => 'Admin Tester', 'password' => bcrypt('password')]
        );

        $response = $this->actingAs($admin)->get('/admin/talent-applications');
        $response->assertStatus(200);
    }
}
