<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Nouvelle candidature - Talent Club Admin</title></head>
<body style="margin:0;padding:0;background-color:#f4f5f7;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;color:#1e293b;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#f4f5f7;padding:40px 15px;">
        <tr><td align="center">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width:600px;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,.05);border:1px solid #e2e8f0;">
            <tr><td style="background:#0A0E17;padding:28px 40px;">
                <div style="font-size:20px;font-weight:800;color:#fff;">TALENT<span style="color:#10B981;">.</span>CLUB</div>
                <div style="font-size:11px;font-weight:600;color:#94a3b8;text-transform:uppercase;letter-spacing:1px;margin-top:2px;">Administration — Notification</div>
            </td></tr>
            <tr><td style="padding:36px 40px;">
                <h1 style="font-size:20px;font-weight:700;color:#0f172a;margin-top:0;">Nouvelle candidature reçue</h1>
                <p style="font-size:14px;color:#475569;line-height:1.6;">Une nouvelle candidature vient d'être soumise sur <strong>Talent Club</strong>.</p>

                <div style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;padding:20px;margin-bottom:24px;">
                    <table width="100%" cellspacing="0" cellpadding="0" style="font-size:13px;">
                        <tr><td style="padding:6px 0;color:#64748b;width:140px;">Référence</td><td style="padding:6px 0;font-weight:700;color:#059669;">{{ $application->reference }}</td></tr>
                        <tr><td style="padding:6px 0;color:#64748b;">Candidat</td><td style="padding:6px 0;font-weight:600;color:#1e293b;">{{ $application->first_name }} {{ $application->last_name }}</td></tr>
                        <tr><td style="padding:6px 0;color:#64748b;">Email</td><td style="padding:6px 0;color:#1e293b;">{{ $application->email }}</td></tr>
                        <tr><td style="padding:6px 0;color:#64748b;">Téléphone</td><td style="padding:6px 0;color:#1e293b;">{{ $application->phone }}</td></tr>
                        <tr><td style="padding:6px 0;color:#64748b;">Ville</td><td style="padding:6px 0;color:#1e293b;">{{ $application->city }}</td></tr>
                        <tr><td style="padding:6px 0;color:#64748b;">Activité</td><td style="padding:6px 0;color:#1e293b;">{{ $application->primary_activity }}</td></tr>
                        <tr><td style="padding:6px 0;color:#64748b;">Expérience</td><td style="padding:6px 0;color:#1e293b;">{{ $application->experience_duration }}</td></tr>
                        <tr><td style="padding:6px 0;color:#64748b;">Soumis le</td><td style="padding:6px 0;color:#1e293b;">{{ $application->submitted_at?->format('d/m/Y H:i') }}</td></tr>
                    </table>
                </div>

                <a href="{{ url('/admin/talent-applications/'. $application->id) }}" style="display:inline-block;padding:12px 24px;background:#0A0E17;color:#fff;text-decoration:none;border-radius:10px;font-size:13px;font-weight:600;">
                    Examiner la candidature →
                </a>
            </td></tr>
            <tr><td style="background:#f8fafc;padding:16px 40px;text-align:center;border-top:1px solid #e2e8f0;font-size:11px;color:#94a3b8;">
                Talent Club Administration · Cotonou, Bénin 🇧🇯
            </td></tr>
        </table>
        </td></tr>
    </table>
</body></html>
