<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactTest extends TestCase
{
    public function test_contact_form_submission_success(): void
    {
        $response = $this->post('/contact', [
            'name' => 'Aurel Medenou',
            'email' => 'aurel@test.bj',
            'role' => 'Entreprise / Recruteur',
            'message' => 'Nous avons un projet urgent de développement d’application web.',
        ]);

        $response->assertRedirect(url('/#contact'));
        $response->assertSessionHas('contact_success');
    }

    public function test_contact_form_validation_failure(): void
    {
        $response = $this->post('/contact', [
            'name' => '',
            'email' => 'invalide-email',
            'message' => 'Court',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
    }
}
