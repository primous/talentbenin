<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Candidature acceptée - Talent Club</title></head>
<body style="margin:0;padding:0;background-color:#f4f5f7;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#f4f5f7;padding:40px 15px;"><tr><td align="center">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width:600px;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,.05);border:1px solid #e2e8f0;">
        <tr><td style="background:linear-gradient(135deg,#064e3b,#059669);padding:36px 40px;text-align:center;">
            <div style="font-size:22px;font-weight:800;color:#fff;margin-bottom:6px;">TALENT<span style="color:#34d399;">.</span>CLUB</div>
            <div style="font-size:14px;color:#a7f3d0;">🎉 Félicitations !</div>
        </td></tr>
        <tr><td style="padding:36px 40px;">
            <h1 style="font-size:22px;font-weight:700;color:#0f172a;margin-top:0;">Bienvenue dans Talent Club, {{ $application->first_name }} !</h1>
            <p style="font-size:14px;color:#475569;line-height:1.7;">Nous avons le grand plaisir de vous informer que votre candidature (réf. <strong>{{ $application->reference }}</strong>) a été <strong style="color:#059669;">acceptée</strong>. Vous faites désormais partie de la communauté <strong>Talent Club Bénin</strong> !</p>

            <div style="background:#F0FDF4;border:1px solid #BBF7D0;border-radius:12px;padding:20px;margin-bottom:24px;">
                <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:1px;color:#166534;margin-bottom:10px;">Prochaines étapes</div>
                <ul style="margin:0;padding-left:18px;font-size:14px;color:#15803d;line-height:2;">
                    <li>Votre profil est en cours de création sur la plateforme</li>
                    <li>Vous recevrez vos identifiants d'accès sous 48h</li>
                    <li>Vous serez visible par les entreprises et recruteurs partenaires</li>
                    <li>Vous aurez accès à tous les événements et opportunités Talent Club</li>
                </ul>
            </div>
            @if($adminMessage)
            <div style="background:#EFF6FF;border:1px solid #BFDBFE;border-radius:12px;padding:16px;margin-bottom:24px;font-size:14px;color:#1d4ed8;">
                <strong>Message de notre équipe :</strong><br>{{ $adminMessage }}
            </div>
            @endif
            <p style="font-size:13px;color:#94a3b8;margin-top:28px;">Avec toute notre confiance,<br><strong>L'équipe Talent Club Bénin</strong></p>
        </td></tr>
        <tr><td style="background:#f8fafc;padding:16px 40px;text-align:center;border-top:1px solid #e2e8f0;font-size:11px;color:#94a3b8;">
            Talent Club · Cotonou, République du Bénin 🇧🇯
        </td></tr>
    </table>
    </td></tr></table>
</body></html>
