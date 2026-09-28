<?php

namespace Tests\Feature;

use App\Mail\ApplicationSubmittedConfirmationMail;
use App\Models\TalentApplication;
use Tests\TestCase;

class ConfirmationMailRenderTest extends TestCase
{
    public function test_application_submitted_confirmation_mail_renders_correctly(): void
    {
        $application = new TalentApplication([
            'first_name' => 'Bio',
            'last_name' => 'Guerra',
            'email' => 'bio@example.bj',
            'reference' => 'TC-2026-9999',
            'primary_activity' => 'Ingénieur Full-Stack',
        ]);

        $mailable = new ApplicationSubmittedConfirmationMail($application);
        $rendered = $mailable->render();

        $this->assertStringContainsString('TALENT', $rendered);
        $this->assertStringContainsString('TC-2026-9999', $rendered);
        $this->assertStringContainsString('Bio', $rendered);
        $this->assertStringContainsString('Guerra', $rendered);
        $this->assertStringContainsString('CANDIDATURE CONFIRMÉE', $rendered);
        $this->assertStringContainsString('Suivez Talent Club', $rendered);
    }
}
