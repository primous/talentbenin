<?php

use App\Mail\AdminApplicationNotificationMail;
use App\Mail\ApplicationSubmittedConfirmationMail;
use App\Models\Category;
use App\Models\Skill;
use App\Models\TalentApplication;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    // Navigation
    public int $currentStep = 1;
    public int $totalSteps = 6;

    // === STEP 1 : Informations personnelles ===
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public string $phone = '';
    public string $city = '';
    public string $age_range = '';
    public $profile_photo = null;

    // === STEP 2 : Profil professionnel ===
    public string $primary_activity = '';
    public string $current_status = '';
    public string $experience_duration = '';
    public string $featured_achievement = '';
    public array $selected_skills = [];
    public array $selected_categories = [];

    // === STEP 3 : Réalisations ===
    public array $projects = [];

    // === STEP 4 : Présence en ligne ===
    public string $linkedin_url = '';
    public string $instagram_url = '';
    public string $facebook_url = '';
    public string $twitter_url = '';
    public string $website_url = '';
    public bool $has_online_earnings = false;
    public string $online_activity_type = '';
    public string $approximate_earnings = '';

    // === STEP 5 : Objectifs & Opportunités ===
    public array $reasons_to_join = [];
    public string $primary_goal = '';
    public string $next_big_goal = '';
    public array $desired_opportunities = [];
    public string $current_main_activity = '';
    public string $current_challenge = '';
    public string $availability = '';

    // === STEP 6 : Vérification ===
    public bool $cgv_accepted = false;

    // UI State
    public bool $submitted = false;
    public string $submittedReference = '';
    public bool $isLoading = false;

    protected function validationRules(): array
    {
        return [
            1 => [
                'first_name'    => 'required|string|min:2|max:60',
                'last_name'     => 'required|string|min:2|max:60',
                'email'         => [
                    'required',
                    'email',
                    function ($attribute, $value, $fail) {
                        $existing = TalentApplication::where('email', $value)->first();
                        if ($existing) {
                            if (in_array($existing->status, [
                                TalentApplication::STATUS_PENDING,
                                TalentApplication::STATUS_UNDER_REVIEW,
                                TalentApplication::STATUS_INFORMATION_REQUESTED
                            ])) {
                                $fail("Une candidature est déjà en cours d'examen pour cette adresse email (Réf. {$existing->reference}).");
                            } elseif ($existing->status === TalentApplication::STATUS_ACCEPTED) {
                                $fail("Cette adresse email appartient déjà à un membre officiel de Talent Club.");
                            }
                        }
                    },
                ],
                'phone'         => 'required|string|min:8|max:20',
                'city'          => 'required|string|min:2|max:80',
                'age_range'     => 'required|string',
                'profile_photo' => 'nullable|image|max:2048',
            ],
            2 => [
                'primary_activity'      => 'required|string|min:2|max:120',
                'current_status'        => 'required|string',
                'experience_duration'   => 'required|string',
                'featured_achievement'  => 'required|string|min:20|max:500',
            ],
            3 => [
                'projects'               => 'nullable|array|max:5',
                'projects.*.title'       => 'nullable|string|max:120',
                'projects.*.type'        => 'nullable|string',
                'projects.*.description' => 'nullable|string|max:500',
                'projects.*.url'         => 'nullable|url',
            ],
            4 => [
                'linkedin_url'  => 'nullable|url',
                'instagram_url' => 'nullable|url',
                'facebook_url'  => 'nullable|url',
                'twitter_url'   => 'nullable|url',
                'website_url'   => 'nullable|url',
            ],
            5 => [
                'primary_goal'          => 'required|string|min:20|max:400',
                'next_big_goal'         => 'required|string|min:20|max:400',
                'current_main_activity' => 'required|string|min:10|max:300',
                'current_challenge'     => 'required|string|min:10|max:300',
                'availability'          => 'required|string',
            ],
            6 => [
                'cgv_accepted' => 'accepted',
            ],
        ];
    }

    public function rules(): array
    {
        $stepRules = $this->validationRules()[$this->currentStep] ?? [];
        if (empty($stepRules)) {
            return ['currentStep' => 'required|integer'];
        }
        return $stepRules;
    }

    public function messages(): array
    {
        return $this->validationMessages();
    }

    protected function validationMessages(): array
    {
        return [
            'first_name.required'           => 'Le prénom est requis.',
            'last_name.required'            => 'Le nom de famille est requis.',
            'email.required'                => 'L\'adresse email est requise.',
            'email.email'                   => 'L\'adresse email n\'est pas valide.',
            'email.unique'                  => 'Cette adresse email a déjà été utilisée pour une candidature.',
            'phone.required'                => 'Le numéro de téléphone est requis.',
            'city.required'                 => 'La ville est requise.',
            'age_range.required'            => 'Veuillez sélectionner votre tranche d\'âge.',
            'profile_photo.image'           => 'Le fichier doit être une image.',
            'profile_photo.max'             => 'La photo ne doit pas dépasser 2Mo.',
            'primary_activity.required'     => 'L\'activité principale est requise.',
            'current_status.required'       => 'Le statut actuel est requis.',
            'experience_duration.required'  => 'La durée d\'expérience est requise.',
            'featured_achievement.required' => 'Décrivez au moins une réalisation marquante.',
            'featured_achievement.min'      => 'Détaillez davantage votre réalisation (min. 20 caractères).',
            'primary_goal.required'         => 'Votre objectif principal est requis.',
            'primary_goal.min'              => 'Développez votre objectif (min. 20 caractères).',
            'next_big_goal.required'        => 'Votre prochain grand défi est requis.',
            'next_big_goal.min'             => 'Développez votre défi (min. 20 caractères).',
            'current_main_activity.required'=> 'Décrivez votre activité principale actuelle.',
            'current_challenge.required'    => 'Décrivez votre défi actuel.',
            'availability.required'         => 'Veuillez indiquer votre disponibilité.',
            'cgv_accepted.accepted'         => 'Vous devez accepter les conditions générales pour finaliser votre candidature.',
        ];
    }

    public function nextStep(): void
    {
        $rules = $this->validationRules()[$this->currentStep] ?? [];
        if (!empty($rules)) {
            $this->validate($rules, $this->validationMessages());
        }

        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }

    public function prevStep(): void
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function goToStep(int $step): void
    {
        if ($step < $this->currentStep) {
            $this->currentStep = $step;
        }
    }

    public function addProject(): void
    {
        if (count($this->projects) < 5) {
            $this->projects[] = [
                'title'       => '',
                'description' => '',
                'url'         => '',
                'type'        => 'project',
            ];
        }
    }

    public function removeProject(int $index): void
    {
        unset($this->projects[$index]);
        $this->projects = array_values($this->projects);
    }

    public function toggleReason(string $reason): void
    {
        if (in_array($reason, $this->reasons_to_join)) {
            $this->reasons_to_join = array_values(array_filter($this->reasons_to_join, fn($r) => $r !== $reason));
        } else {
            if (count($this->reasons_to_join) < 3) {
                $this->reasons_to_join[] = $reason;
            }
        }
    }

    public function toggleOpportunity(string $opp): void
    {
        if (in_array($opp, $this->desired_opportunities)) {
            $this->desired_opportunities = array_values(array_filter($this->desired_opportunities, fn($o) => $o !== $opp));
        } else {
            $this->desired_opportunities[] = $opp;
        }
    }

    public function submitApplication()
    {
        $allRules = array_merge(...array_values($this->validationRules()));
        $this->validate($allRules, $this->validationMessages());

        $this->isLoading = true;

        $photoPath = null;
        if ($this->profile_photo) {
            $photoPath = $this->profile_photo->store('talent-photos', 'public');
        }

        $application = TalentApplication::create([
            'reference'              => TalentApplication::generateUniqueReference(),
            'first_name'             => $this->first_name,
            'last_name'              => $this->last_name,
            'email'                  => $this->email,
            'phone'                  => $this->phone,
            'city'                   => $this->city,
            'age_range'              => $this->age_range,
            'profile_photo_path'     => $photoPath,
            'primary_activity'       => $this->primary_activity,
            'current_status'         => $this->current_status,
            'experience_duration'    => $this->experience_duration,
            'featured_achievement'   => $this->featured_achievement,
            'linkedin_url'           => $this->linkedin_url ?: null,
            'instagram_url'          => $this->instagram_url ?: null,
            'facebook_url'           => $this->facebook_url ?: null,
            'twitter_url'            => $this->twitter_url ?: null,
            'website_url'            => $this->website_url ?: null,
            'has_online_earnings'    => $this->has_online_earnings,
            'online_activity_type'   => $this->online_activity_type ?: null,
            'approximate_earnings'   => $this->approximate_earnings ?: null,
            'reasons_to_join'        => $this->reasons_to_join,
            'primary_goal'           => $this->primary_goal,
            'next_big_goal'          => $this->next_big_goal,
            'desired_opportunities'  => $this->desired_opportunities,
            'current_main_activity'  => $this->current_main_activity,
            'current_challenge'      => $this->current_challenge,
            'availability'           => $this->availability,
            'status'                 => TalentApplication::STATUS_PENDING,
            'submitted_at'           => now(),
        ]);

        // Attach skills and categories
        if (!empty($this->selected_skills)) {
            $application->skills()->attach($this->selected_skills);
        }
        if (!empty($this->selected_categories)) {
            $application->categories()->attach($this->selected_categories);
        }

        // Save projects
        foreach ($this->projects as $p) {
            if (!empty(trim($p['title']))) {
                $application->projects()->create([
                    'title'       => $p['title'],
                    'description' => $p['description'] ?? null,
                    'url'         => $p['url'] ?? null,
                    'type'        => $p['type'] ?? 'project',
                ]);
            }
        }

        // Send emails
        try {
            Mail::to($application->email)->send(new ApplicationSubmittedConfirmationMail($application));
            $adminEmail = config('talent.admin_email', 'admin@talentclub.bj');
            Mail::to($adminEmail)->send(new AdminApplicationNotificationMail($application));
        } catch (\Exception $e) {
            // Mail failures do not block the process
        }

        $this->submittedReference = $application->reference;
        $this->submitted = true;
        $this->isLoading = false;

        $this->redirect(route('talent.application.confirmation', ['reference' => $application->reference]), navigate: false);
    }

    public function render()
    {
        return view('components.application-form.application-form', [
            'categories'        => Category::orderBy('name')->get(),
            'skills'            => Skill::orderBy('name')->get(),
            'ageRanges'         => ['15-18 ans', '19-24 ans', '25-30 ans', '31-35 ans', '35+ ans'],
            'statuses'          => [
                'etudiant'          => 'Étudiant(e)',
                'travailleur'       => 'Salarié(e)',
                'freelance'         => 'Freelance / Auto-entrepreneur',
                'entrepreneur'      => 'Entrepreneur / Chef d\'entreprise',
                'en_recherche'      => 'En recherche d\'opportunités',
                'autre'             => 'Autre',
            ],
            'experienceDurations' => [
                'moins_1_an'  => 'Moins d\'1 an',
                '1_2_ans'     => '1 à 2 ans',
                '3_5_ans'     => '3 à 5 ans',
                '5_10_ans'    => '5 à 10 ans',
                'plus_10_ans' => 'Plus de 10 ans',
            ],
            'reasonsList'       => [
                'visibilite'     => '🚀 Gagner en visibilité',
                'opportunites'   => '💼 Accéder à des opportunités',
                'reseau'         => '🤝 Développer mon réseau',
                'mentorat'       => '🎓 Bénéficier de mentorat',
                'entreprises'    => '🏢 Être contacté par des entreprises',
                'inspiration'    => '✨ M\'inspirer des autres talents',
            ],
            'opportunitiesList' => [
                'emploi'         => 'Offres d\'emploi',
                'stage'          => 'Stages',
                'freelance'      => 'Missions freelance',
                'collaboration'  => 'Collaborations',
                'financement'    => 'Financements / Bourses',
                'formation'      => 'Formations',
                'evenements'     => 'Événements & Networking',
                'concours'       => 'Concours & Prix',
            ],
            'availabilities'    => [
                'temps_plein'    => 'Disponible à temps plein',
                'temps_partiel'  => 'Disponible à temps partiel',
                'soir_weekend'   => 'Disponible le soir / week-end',
                'sur_projet'     => 'Disponible sur projet',
                'non_disponible' => 'Non disponible pour le moment',
            ],
        ]);
    }
};