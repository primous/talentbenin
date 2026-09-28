<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Candidature reçue - Talent Club</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f5f7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #1e293b;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #f4f5f7; padding: 40px 15px;">
        <tr>
            <td align="center">
                <table width="100%" max-width="600" border="0" cellspacing="0" cellpadding="0" style="max-width: 600px; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">
                    <!-- Header -->
                    <tr>
                        <td style="background-color: #0A0E17; padding: 32px 40px; text-align: left;">
                            <div style="font-size: 22px; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">
                                TALENT<span style="color: #10B981;">.</span>CLUB
                            </div>
                            <div style="font-size: 11px; font-weight: 600; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px; margin-top: 2px;">
                                Écosystème des talents du Bénin
                            </div>
                        </td>
                    </tr>

                    <!-- Body Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <h1 style="font-size: 22px; font-weight: 700; color: #0f172a; margin-top: 0; margin-bottom: 16px;">
                                Bonjour {{ $application->first_name }},
                            </h1>
                            <p style="font-size: 15px; line-height: 1.6; color: #475569; margin-bottom: 24px;">
                                Nous vous confirmons que votre candidature pour rejoindre <strong>Talent Club</strong> a bien été enregistrée avec succès.
                            </p>

                            <!-- Reference Box -->
                            <div style="background-color: #F0FDF4; border: 1px solid #BBF7D0; border-radius: 12px; padding: 20px; margin-bottom: 28px; text-align: center;">
                                <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #047857; margin-bottom: 6px;">
                                    Référence de candidature
                                </div>
                                <div style="font-size: 24px; font-weight: 800; color: #064E3B; letter-spacing: 1px;">
                                    {{ $application->reference }}
                                </div>
                            </div>

                            <!-- Next steps -->
                            <h2 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">
                                Quelles sont les prochaines étapes ?
                            </h2>
                            <ol style="font-size: 14px; line-height: 1.6; color: #475569; padding-left: 20px; margin-bottom: 28px;">
                                <li style="margin-bottom: 8px;"><strong>Examen de votre dossier :</strong> Notre comité de sélection examine vos réalisations et compétences sous 3 à 5 jours ouvrés.</li>
                                <li style="margin-bottom: 8px;"><strong>Notification :</strong> Vous recevrez une notification par email dès que votre statut évoluera.</li>
                                <li><strong>Activation :</strong> Dès validation, votre profil officiel Talent Club sera activé et valorisé auprès des entreprises.</li>
                            </ol>

                            <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin-bottom: 32px;">
                                Si vous avez des questions ou souhaitez apporter un complément d'information, vous pouvez répondre directement à cet email ou nous écrire à <a href="mailto:contact@talentclub.bj" style="color: #059669; font-weight: 600; text-decoration: none;">contact@talentclub.bj</a>.
                            </p>

                            <div style="border-top: 1px solid #f1f5f9; padding-top: 20px; font-size: 13px; color: #94a3b8;">
                                À très bientôt,<br>
                                <strong style="color: #334155;">L'équipe Talent Club Bénin</strong>
                            </div>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f8fafc; padding: 20px 40px; text-align: center; border-top: 1px solid #e2e8f0; font-size: 12px; color: #94a3b8;">
                            Talent Club · Cotonou, République du Bénin 🇧🇯<br>
                            « Réunir les talents. Créer les connexions. Construire les opportunités. »
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
