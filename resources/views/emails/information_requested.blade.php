<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Précisions demandées - Talent Club</title></head>
<body style="margin:0;padding:0;background-color:#f4f5f7;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#f4f5f7;padding:40px 15px;"><tr><td align="center">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width:600px;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,.05);border:1px solid #e2e8f0;">
        <tr><td style="background:#0A0E17;padding:28px 40px;">
            <div style="font-size:20px;font-weight:800;color:#fff;">TALENT<span style="color:#10B981;">.</span>CLUB</div>
            <div style="font-size:11px;font-weight:600;color:#94a3b8;text-transform:uppercase;letter-spacing:1px;margin-top:2px;">Suivi de candidature</div>
        </td></tr>
        <tr><td style="padding:36px 40px;">
            <h1 style="font-size:20px;font-weight:700;color:#0f172a;margin-top:0;">Bonjour {{ $application->first_name }},</h1>
            <p style="font-size:14px;color:#475569;line-height:1.6;">Merci pour votre candidature à <strong>Talent Club</strong> (réf. <strong>{{ $application->reference }}</strong>). Notre comité d'examen a étudié votre profil et souhaite recevoir quelques compléments avant de statuer sur votre admission.</p>

            <div style="background:#FFF7ED;border:1px solid #FED7AA;border-radius:12px;padding:20px;margin-bottom:24px;">
                <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:1px;color:#9A3412;margin-bottom:8px;">Précisions attendues par l'équipe :</div>
                <p style="font-size:14px;color:#7C2D12;line-height:1.7;margin:0;font-weight:500;">{{ $adminMessage }}</p>
            </div>

            <div style="text-align:center;margin:32px 0;">
                <a href="{{ route('talent.application.complete', ['reference' => $application->reference]) }}" style="display:inline-block;padding:14px 28px;background:#059669;color:#ffffff;text-decoration:none;border-radius:10px;font-size:14px;font-weight:600;box-shadow:0 2px 8px rgba(5,150,105,0.3);">
                    Répondre et compléter ma candidature →
                </a>
            </div>

            <p style="font-size:13px;color:#64748b;line-height:1.6;">Toutes vos données déjà saisies ont été conservées. Vous n'avez pas besoin de recommencer votre inscription.</p>

            <p style="font-size:13px;color:#94a3b8;margin-top:28px;">Avec toute notre attention,<br><strong>L'équipe Talent Club Bénin</strong></p>
        </td></tr>
        <tr><td style="background:#f8fafc;padding:16px 40px;text-align:center;border-top:1px solid #e2e8f0;font-size:11px;color:#94a3b8;">
            Talent Club · Cotonou, République du Bénin 🇧🇯
        </td></tr>
    </table>
    </td></tr></table>
</body></html>
