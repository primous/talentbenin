<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('mail:test {email?}', function (?string $email = null) {
    $targetEmail = $email ?? config('mail.from.address');
    $this->info("Tentative d'envoi d'un email de test vers : {$targetEmail} via " . config('mail.default') . ' (' . config('mail.mailers.smtp.host') . ')...');

    try {
        Illuminate\Support\Facades\Mail::raw("Félicitations ! Votre configuration SMTP Gmail pour Talent Club fonctionne parfaitement.", function ($message) use ($targetEmail) {
            $message->to($targetEmail)
                ->subject("✨ Test réussi - Talent Club Bénin");
        });
        $this->info("✅ Succès ! L'email a bien été transmis au serveur SMTP pour {$targetEmail}.");
    } catch (\Throwable $e) {
        $this->error("❌ Échec de l'envoi : " . $e->getMessage());
    }
})->purpose('Tester la configuration SMTP et l\'envoi d\'un email');

Artisan::command('mail:resend {reference}', function (string $reference) {
    $application = App\Models\TalentApplication::where('reference', $reference)->first();
    if (!$application) {
        $this->error("Candidature non trouvée pour {$reference}");
        return;
    }
    Illuminate\Support\Facades\Mail::to($application->email)->send(new App\Mail\ApplicationSubmittedConfirmationMail($application));
    $this->info("✅ Email officiel de confirmation renvoyé avec succès à {$application->email} pour la référence {$reference} !");
})->purpose('Renvoyer l\'email de confirmation officiel pour une candidature');
