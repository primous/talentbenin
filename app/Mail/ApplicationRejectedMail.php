<?php

namespace App\Mail;

use App\Models\TalentApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationRejectedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public TalentApplication $application, public ?string $adminMessage = null)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Mise à jour concernant votre candidature Talent Club [{$this->application->reference}]",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.application_rejected',
            with: [
                'application' => $this->application,
                'adminMessage' => $this->adminMessage,
            ],
        );
    }
}
