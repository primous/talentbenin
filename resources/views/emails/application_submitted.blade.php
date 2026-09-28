<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Votre candidature a bien été reçue · Talent Club</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Sora:wght@700;800;900&display=swap" rel="stylesheet">
    <style>
        @media only screen and (max-width: 620px) {
            .email-container { width: 100% !important; border-radius: 0 !important; }
            .hero-table td { display: block !important; width: 100% !important; text-align: center !important; }
            .hero-visual { padding-top: 20px !important; margin: 0 auto !important; }
            .mobile-center { text-align: center !important; }
            .mobile-padding { padding: 24px 20px !important; }
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #F4F6EC; font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased; color: #242619;">

    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #F4F6EC; padding: 30px 12px;">
        <tr>
            <td align="center">
                
                <!-- Main Container (600px) -->
                <table class="email-container" width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width: 600px; background-color: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 12px 36px rgba(36, 38, 25, 0.08); border: 1px solid #E2E8F0;">
                    
                    <!-- 1. Top Logo Bar (Image 1 style: clean white header with centered brand logo) -->
                    <tr>
                        <td align="center" style="background-color: #ffffff; padding: 26px 30px 22px 30px; border-bottom: 1px solid #F1F5F9;">
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center">
                                        <div style="display: inline-block; background-color: #242619; color: #ffffff; padding: 8px 20px; border-radius: 12px; font-family: 'Sora', sans-serif; font-size: 19px; font-weight: 900; letter-spacing: -0.5px;">
                                            TALENT<span style="color: #D8F741;">.</span>CLUB
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- 2. Hero Section (Image 1 style: dark rich banner with status pill, large headline, graphic & CTA button) -->
                    <tr>
                        <td style="background-color: #242619; padding: 36px 36px 32px 36px; background-image: linear-gradient(145deg, #242619 0%, #171810 100%);">
                            <table class="hero-table" width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <!-- Full Width Text & CTA -->
                                    <td valign="middle">
                                        
                                        <!-- Live / Status Pill -->
                                        <div style="margin-bottom: 14px;">
                                            <span style="display: inline-block; background-color: rgba(216, 247, 65, 0.15); border: 1px solid rgba(216, 247, 65, 0.4); padding: 4px 10px; border-radius: 9999px; font-size: 10px; font-weight: 800; color: #D8F741; text-transform: uppercase; letter-spacing: 1.2px; font-family: 'Sora', sans-serif;">
                                                ● CANDIDATURE CONFIRMÉE
                                            </span>
                                        </div>

                                        <!-- Big Main Headline (Image 1 style) -->
                                        <h1 style="font-family: 'Sora', sans-serif; font-size: 24px; font-weight: 800; line-height: 1.25; color: #ffffff; margin: 0 0 10px 0; letter-spacing: -0.02em;">
                                            Bienvenue dans le processus de sélection
                                        </h1>

                                        <!-- Subtitle -->
                                        <p style="font-size: 13px; font-weight: 500; color: #CBD5E1; margin: 0 0 16px 0; line-height: 1.4;">
                                            Écosystème des talents d'élite du Bénin · Cohorte 2026
                                        </p>

                                        <!-- Candidate Pill Preview -->
                                        <div style="font-size: 11px; font-weight: 700; color: #A7C123; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 22px;">
                                            CANDIDAT : <span style="color: #ffffff;">{{ $application->first_name }} {{ $application->last_name }}</span>
                                        </div>

                                        <!-- Primary Hero Button (Image 1 style: rounded pill button) -->
                                        <div>
                                            <a href="{{ url('/') }}" target="_blank" style="display: inline-block; background-color: #D8F741; color: #242619; font-family: 'Sora', sans-serif; font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.8px; padding: 12px 26px; border-radius: 9999px; text-decoration: none; box-shadow: 0 4px 14px rgba(216, 247, 65, 0.35);">
                                                DÉCOUVRIR LE CLUB &rarr;
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- 3. Body Content (Image 1 style: clean text, personalized greeting, clear links) -->
                    <tr>
                        <td class="mobile-padding" style="padding: 36px 36px 28px 36px;">
                            
                            <p style="font-family: 'Sora', sans-serif; font-size: 18px; font-weight: 700; color: #242619; margin: 0 0 16px 0;">
                                Bonjour {{ $application->first_name }},
                            </p>

                            <p style="font-size: 14px; line-height: 1.7; color: #475569; margin: 0 0 20px 0;">
                                Nous vous confirmons la bonne réception de votre dossier de candidature pour intégrer la communauté <strong>Talent Club</strong>. Notre équipe examine avec attention chaque profil afin de connecter les meilleurs talents béninois avec des entreprises et opportunités à forte valeur ajoutée.
                            </p>

                            <!-- Reference Box (Highlighted Card) -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #F8FAF0; border: 1.5px dashed #A7C123; border-radius: 14px; margin: 22px 0 26px 0;">
                                <tr>
                                    <td align="center" style="padding: 18px 20px;">
                                        <div style="font-family: 'Sora', sans-serif; font-size: 10px; font-weight: 800; text-transform: uppercase; letter-spacing: 1.2px; color: #242619; margin-bottom: 6px;">
                                            VOTRE RÉFÉRENCE DE DOSSIER
                                        </div>
                                        <div style="font-family: monospace; font-size: 24px; font-weight: 800; color: #242619; letter-spacing: 2px;">
                                            {{ $application->reference }}
                                        </div>
                                        <div style="font-size: 11px; color: #64748B; margin-top: 4px;">
                                            Conservez précieusement cette référence pour tout échange avec notre équipe.
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <!-- Next Steps (Clean numbered steps) -->
                            <div style="font-family: 'Sora', sans-serif; font-size: 14px; font-weight: 800; color: #242619; margin-bottom: 12px;">
                                Les prochaines étapes de votre admission :
                            </div>

                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom: 24px;">
                                <tr>
                                    <td width="28" valign="top" style="padding-bottom: 10px;">
                                        <div style="width: 20px; height: 20px; border-radius: 50%; background-color: #A7C123; color: #242619; font-size: 11px; font-weight: 800; text-align: center; line-height: 20px;">1</div>
                                    </td>
                                    <td valign="top" style="padding-bottom: 10px; font-size: 13px; line-height: 1.6; color: #475569;">
                                        <strong style="color: #242619;">Étude du profil :</strong> Notre jury technique audite vos compétences et réalisations sous <strong>3 à 5 jours ouvrés</strong>.
                                    </td>
                                </tr>
                                <tr>
                                    <td width="28" valign="top" style="padding-bottom: 10px;">
                                        <div style="width: 20px; height: 20px; border-radius: 50%; background-color: #A7C123; color: #242619; font-size: 11px; font-weight: 800; text-align: center; line-height: 20px;">2</div>
                                    </td>
                                    <td valign="top" style="padding-bottom: 10px; font-size: 13px; line-height: 1.6; color: #475569;">
                                        <strong style="color: #242619;">Notification personnalisée :</strong> Vous recevrez un email officiel dès que votre dossier change de statut.
                                    </td>
                                </tr>
                                <tr>
                                    <td width="28" valign="top">
                                        <div style="width: 20px; height: 20px; border-radius: 50%; background-color: #D8F741; color: #242619; font-size: 11px; font-weight: 800; text-align: center; line-height: 20px;">3</div>
                                    </td>
                                    <td valign="top" style="font-size: 13px; line-height: 1.6; color: #475569;">
                                        <strong style="color: #242619;">Accréditation & Opportunités :</strong> Dès validation, vous accédez aux missions rémunérées et aux briefs entreprises.
                                    </td>
                                </tr>
                            </table>

                            <p style="font-size: 14px; line-height: 1.6; color: #475569; margin: 0 0 20px 0;">
                                En attendant, nous vous invitons à consulter nos offres récentes et notre écosystème sur notre plateforme officielle.
                            </p>

                            <!-- Sign-off (Image 1 style: Enjoy! Team) -->
                            <div style="font-size: 14px; line-height: 1.5; color: #475569; margin-bottom: 28px;">
                                À très bientôt,<br>
                                <strong style="font-family: 'Sora', sans-serif; color: #242619;">L'équipe Talent Club Bénin</strong>
                            </div>

                            <!-- Secondary bottom text with action (Image 1 style: "Ready to talk to us... Click here") -->
                            <div style="border-top: 1px solid #F1F5F9; padding-top: 18px; font-size: 13px; color: #64748B;">
                                Une question sur votre dossier ou besoin d'assistance ? 
                                <a href="mailto:contact@talentclub.bj" style="color: #242619; font-weight: 700; text-decoration: underline;">Contactez notre équipe ici &rarr;</a>
                            </div>

                        </td>
                    </tr>

                    <!-- 4. Follow Us On Strip (Image 1 style: prominent colored bar with social badges) -->
                    <tr>
                        <td align="center" style="background-color: #242619; padding: 26px 20px; border-top: 1px solid #1a1c12;">
                            <div style="font-family: 'Sora', sans-serif; font-size: 14px; font-weight: 800; color: #ffffff; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 14px;">
                                Suivez Talent Club
                            </div>

                            <!-- Social Icons (Image 1 style: clean circular icons) -->
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <!-- Facebook -->
                                    <td style="padding: 0 6px;">
                                        <a href="https://facebook.com" target="_blank" style="display: inline-block; width: 34px; height: 34px; border-radius: 50%; background-color: #ffffff; text-align: center; line-height: 34px; color: #242619; font-weight: 900; font-size: 15px; text-decoration: none;">
                                            f
                                        </a>
                                    </td>
                                    <!-- LinkedIn -->
                                    <td style="padding: 0 6px;">
                                        <a href="https://linkedin.com" target="_blank" style="display: inline-block; width: 34px; height: 34px; border-radius: 50%; background-color: #ffffff; text-align: center; line-height: 34px; color: #242619; font-weight: 900; font-size: 13px; text-decoration: none;">
                                            in
                                        </a>
                                    </td>
                                    <!-- Twitter / X -->
                                    <td style="padding: 0 6px;">
                                        <a href="https://twitter.com" target="_blank" style="display: inline-block; width: 34px; height: 34px; border-radius: 50%; background-color: #ffffff; text-align: center; line-height: 34px; color: #242619; font-weight: 900; font-size: 13px; text-decoration: none;">
                                            𝕏
                                        </a>
                                    </td>
                                    <!-- Instagram -->
                                    <td style="padding: 0 6px;">
                                        <a href="https://instagram.com" target="_blank" style="display: inline-block; width: 34px; height: 34px; border-radius: 50%; background-color: #ffffff; text-align: center; line-height: 34px; color: #242619; font-weight: 900; font-size: 13px; text-decoration: none;">
                                            IG
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- 5. Sub-Footer (Image 1 style: clean legal, contact links, address) -->
                    <tr>
                        <td align="center" style="background-color: #F8FAF0; padding: 22px 30px; font-size: 11px; color: #64748B; line-height: 1.6; border-top: 1px solid #E2E8F0;">
                            Talent Club · Cotonou & Calavi, République du Bénin 🇧🇯<br>
                            <a href="{{ url('/') }}" style="color: #242619; font-weight: 700; text-decoration: none;">www.talentclub.bj</a>
                            &nbsp;|&nbsp;
                            <a href="tel:+2290154000000" style="color: #64748B; text-decoration: none;">+229 01 54 00 00 00</a>
                            &nbsp;|&nbsp;
                            <a href="mailto:contact@talentclub.bj" style="color: #A7C123; font-weight: 700; text-decoration: none;">contact@talentclub.bj</a>
                            <br><br>
                            <span style="color: #94A3B8;">Vous recevez cet email suite à votre dépôt de candidature sur la plateforme officielle Talent Club Bénin.</span>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>
