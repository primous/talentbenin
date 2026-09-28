<?php

namespace App\Mail;

use App\Models\TalentApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationAcceptedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public TalentApplication $application, public ?string $adminMessage = null)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Bienvenue dans Talent Club — Votre candidature a été acceptée !',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.application_accepted',
            with: [
                'application' => $this->application,
                'adminMessage' => $this->adminMessage,
            ],
        );
    }
}
