<?php

namespace App\Mail;

use App\Models\TalentApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationInformationRequestedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public TalentApplication $application, public string $adminMessage)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Précisions demandées concernant votre candidature Talent Club [{$this->application->reference}]",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.information_requested',
            with: [
                'application' => $this->application,
                'adminMessage' => $this->adminMessage,
            ],
        );
    }
}
