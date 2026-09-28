<?php

namespace App\Mail;

use App\Models\TalentApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationSubmittedConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public TalentApplication $application)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Votre candidature à Talent Club a bien été reçue',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.application_submitted',
        );
    }
}
