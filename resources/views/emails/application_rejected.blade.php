<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Candidature non retenue - Talent Club</title></head>
<body style="margin:0;padding:0;background-color:#f4f5f7;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#f4f5f7;padding:40px 15px;"><tr><td align="center">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width:600px;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,.05);border:1px solid #e2e8f0;">
        <tr><td style="background:#0A0E17;padding:28px 40px;">
            <div style="font-size:20px;font-weight:800;color:#fff;">TALENT<span style="color:#10B981;">.</span>CLUB</div>
        </td></tr>
        <tr><td style="padding:36px 40px;">
            <h1 style="font-size:20px;font-weight:700;color:#0f172a;margin-top:0;">Bonjour {{ $application->first_name }},</h1>
            <p style="font-size:14px;color:#475569;line-height:1.7;">Merci sincèrement pour l'intérêt que vous portez à <strong>Talent Club</strong> et pour le temps consacré à votre candidature (réf. <strong>{{ $application->reference }}</strong>).</p>
            <p style="font-size:14px;color:#475569;line-height:1.7;">Après examen attentif de votre dossier, nous sommes au regret de vous informer que votre candidature n'a pas été retenue à ce stade.</p>

            @if($adminMessage)
            <div style="background:#FFF1F2;border:1px solid #FECDD3;border-radius:12px;padding:16px;margin-bottom:24px;font-size:14px;color:#9f1239;">
                <strong>Retour de notre équipe :</strong><br>{{ $adminMessage }}
            </div>
            @endif

            <p style="font-size:14px;color:#475569;line-height:1.7;">Cette décision ne remet pas en cause vos compétences ou votre potentiel. Talent Club évolue en permanence, et nous vous encourageons à soumettre une nouvelle candidature dans 6 mois, après avoir enrichi votre parcours.</p>

            <p style="font-size:13px;color:#94a3b8;margin-top:28px;">Avec nos encouragements,<br><strong>L'équipe Talent Club Bénin</strong></p>
        </td></tr>
        <tr><td style="background:#f8fafc;padding:16px 40px;text-align:center;border-top:1px solid #e2e8f0;font-size:11px;color:#94a3b8;">
            Talent Club · Cotonou, République du Bénin 🇧🇯
        </td></tr>
    </table>
    </td></tr></table>
</body></html>
