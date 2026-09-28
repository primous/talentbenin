<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $stats = [
            ['value' => '500+', 'label' => 'Talents Béninois', 'detail' => 'Profils rigoureusement sélectionnés'],
            ['value' => '50+', 'label' => 'Compétences Clés', 'detail' => 'Tech, Design, Marketing, Média'],
            ['value' => '120+', 'label' => 'Services Clé en Main', 'detail' => 'Tarifs clairs en FCFA'],
            ['value' => '100%', 'label' => 'Bénin & Diaspora', 'detail' => 'Cotonou, Calavi, Parakou, Monde']
        ];

        $categories = [
            [
                'id' => 1,
                'name' => 'Développement Web & Mobile',
                'slug' => 'developpement-web-mobile',
                'icon' => 'code',
                'count' => 84,
                'description' => 'Laravel, React, Flutter, API, bases de données et solutions sur-mesure.',
                'tags' => ['Laravel', 'Vue.js', 'Flutter', 'Next.js']
            ],
            [
                'id' => 2,
                'name' => 'Design & Identité Visuelle',
                'slug' => 'design-identite-visuelle',
                'icon' => 'palette',
                'count' => 68,
                'description' => 'Logos, chartes graphiques, UI/UX design sur Figma et supports de marque.',
                'tags' => ['Branding', 'UI/UX', 'Figma', 'Illustrator']
            ],
            [
                'id' => 3,
                'name' => 'Marketing & Acquisition',
                'slug' => 'marketing-acquisition',
                'icon' => 'trending-up',
                'count' => 52,
                'description' => 'Stratégie de croissance, social media, publicités Meta & Google Ads.',
                'tags' => ['Growth', 'Meta Ads', 'SEO', 'Community']
            ],
            [
                'id' => 4,
                'name' => 'Vidéo, Motion & Photo',
                'slug' => 'video-motion-photo',
                'icon' => 'video',
                'count' => 45,
                'description' => 'Montage dynamique, formats courts Reels/TikTok, motion design et shooting.',
                'tags' => ['Premiere Pro', 'After Effects', 'Reels', 'Photo']
            ],
            [
                'id' => 5,
                'name' => 'Rédaction & Copywriting',
                'slug' => 'redaction-copywriting',
                'icon' => 'file-text',
                'count' => 38,
                'description' => 'Pages de vente percutantes, articles SEO, storytelling et scripts vidéo.',
                'tags' => ['Copywriting', 'SEO', 'Storytelling', 'Articles']
            ],
            [
                'id' => 6,
                'name' => 'Vente & Développement Commercial',
                'slug' => 'vente-business',
                'icon' => 'briefcase',
                'count' => 31,
                'description' => 'Prospection B2B, closing commercial, négociation et CRM.',
                'tags' => ['Prospection', 'Closing', 'CRM', 'B2B']
            ],
            [
                'id' => 7,
                'name' => 'IA, Data & Automatisation',
                'slug' => 'ia-data-automatisation',
                'icon' => 'cpu',
                'count' => 29,
                'description' => 'Workflows Make/Zapier, intégrations IA, dashboards et pipelines de données.',
                'tags' => ['Make', 'Zapier', 'Python', 'Power BI']
            ],
            [
                'id' => 8,
                'name' => 'Gestion de Projet & Opérations',
                'slug' => 'gestion-projet',
                'icon' => 'check-square',
                'count' => 26,
                'description' => 'Coordination Agile/Scrum, structuration d’équipes et organisation opérationnelle.',
                'tags' => ['Agile', 'Notion', 'Scrum', 'Trello']
            ],
            [
                'id' => 9,
                'name' => 'Finance & Comptabilité',
                'slug' => 'finance-comptabilite',
                'icon' => 'dollar-sign',
                'count' => 22,
                'description' => 'Business plans, modélisation financière, déclarations fiscales et audit.',
                'tags' => ['Business Plan', 'Excel', 'Audit', 'Fiscalité']
            ],
            [
                'id' => 10,
                'name' => 'Conseil & Stratégie Digitale',
                'slug' => 'conseil-strategie',
                'icon' => 'compass',
                'count' => 19,
                'description' => 'Accompagnement de startups, transformation numérique et positionnement.',
                'tags' => ['Stratégie', 'Go-to-market', 'Audit', 'Branding']
            ]
        ];

        $featuredTalents = [
            [
                'id' => 1,
                'name' => 'Kévin A.',
                'title' => 'Designer Graphique & Brand Strategist',
                'category' => 'design',
                'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&h=400&q=80',
                'location' => 'Cotonou, Bénin',
                'bio' => 'Créateur d’identités de marque mémorables pour startups et PME en Afrique de l’Ouest.',
                'skills' => ['Branding', 'Identité visuelle', 'UI Design', 'Figma'],
                'rating' => '4.9',
                'reviews_count' => 28,
                'starting_price' => '35 000 FCFA',
                'status' => 'Disponible pour missions',
                'badge' => 'Top Talent'
            ],
            [
                'id' => 2,
                'name' => 'Amina S.',
                'title' => 'Développeuse Fullstack Laravel & React',
                'category' => 'tech',
                'avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=400&h=400&q=80',
                'location' => 'Abomey-Calavi, Bénin',
                'bio' => 'Spécialiste du développement d’applications web scalables, API REST sécurisées et SaaS.',
                'skills' => ['Laravel', 'React', 'Tailwind CSS', 'PostgreSQL'],
                'rating' => '5.0',
                'reviews_count' => 34,
                'starting_price' => '150 000 FCFA',
                'status' => 'Disponible cette semaine',
                'badge' => 'Certifiée'
            ],
            [
                'id' => 3,
                'name' => 'Farid D.',
                'title' => 'Monteur Vidéo & Motion Designer',
                'category' => 'media',
                'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&h=400&q=80',
                'location' => 'Porto-Novo, Bénin',
                'bio' => 'Je donne vie à vos vidéos marketing avec un montage dynamique taillé pour capter l’attention.',
                'skills' => ['Premiere Pro', 'After Effects', 'Reels/TikTok', 'Sound Design'],
                'rating' => '4.8',
                'reviews_count' => 22,
                'starting_price' => '25 000 FCFA',
                'status' => 'Disponible pour missions',
                'badge' => 'Créatif Pro'
            ],
            [
                'id' => 4,
                'name' => 'Grace M.',
                'title' => 'Growth Marketer & Copywriter B2B',
                'category' => 'tech',
                'avatar' => 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?auto=format&fit=crop&w=400&h=400&q=80',
                'location' => 'Cotonou, Bénin',
                'bio' => 'J’optimise vos tunnels d’acquisition et rédige des contenus à haute conversion pour vos ventes.',
                'skills' => ['Copywriting', 'Meta Ads', 'LinkedIn B2B', 'Emailing'],
                'rating' => '4.9',
                'reviews_count' => 19,
                'starting_price' => '40 000 FCFA',
                'status' => '2 créneaux ouverts',
                'badge' => 'Top Performance'
            ],
            [
                'id' => 5,
                'name' => 'Yannick H.',
                'title' => 'Développeur Mobile Flutter & Backend',
                'category' => 'tech',
                'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=400&h=400&q=80',
                'location' => 'Parakou, Bénin',
                'bio' => 'Création d’applications mobiles iOS & Android fluides avec synchronisation temps réel.',
                'skills' => ['Flutter', 'Dart', 'Firebase', 'REST API'],
                'rating' => '4.9',
                'reviews_count' => 16,
                'starting_price' => '180 000 FCFA',
                'status' => 'Disponible',
                'badge' => 'Mobile Expert'
            ],
            [
                'id' => 6,
                'name' => 'Rolande K.',
                'title' => 'Product Designer (UI/UX) & Prototypage',
                'category' => 'design',
                'avatar' => 'https://images.unsplash.com/photo-1589156280159-27698a70f29e?auto=format&fit=crop&w=400&h=400&q=80',
                'location' => 'Cotonou, Bénin',
                'bio' => 'Recherche utilisateur, ergonomie intuitive et design systems complets pour produits digitaux.',
                'skills' => ['UX Research', 'Figma', 'Design System', 'Prototypage'],
                'rating' => '5.0',
                'reviews_count' => 27,
                'starting_price' => '60 000 FCFA',
                'status' => 'Disponible pour missions',
                'badge' => 'UX Master'
            ],
            [
                'id' => 7,
                'name' => 'Sébastien T.',
                'title' => 'Spécialiste Automatisation & No-Code',
                'category' => 'tech',
                'avatar' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=400&h=400&q=80',
                'location' => 'Abomey-Calavi, Bénin',
                'bio' => 'Automatisez vos tâches répétitives : synchronisation CRM, génération de devis et bots WhatsApp.',
                'skills' => ['Make', 'Zapier', 'Airtable', 'WhatsApp API'],
                'rating' => '4.8',
                'reviews_count' => 14,
                'starting_price' => '30 000 FCFA',
                'status' => 'Disponible',
                'badge' => 'No-Code Pro'
            ],
            [
                'id' => 8,
                'name' => 'Esméralda B.',
                'title' => 'Photographe Corporate & Directrice Artistique',
                'category' => 'media',
                'avatar' => 'https://images.unsplash.com/photo-1567532939604-b6b5b0db2604?auto=format&fit=crop&w=400&h=400&q=80',
                'location' => 'Ouidah / Cotonou',
                'bio' => 'Mise en valeur visuelle de vos équipes, vos produits et vos événements d’entreprise.',
                'skills' => ['Portraits Pro', 'Événements', 'Retouche', 'Direction Artistique'],
                'rating' => '4.9',
                'reviews_count' => 25,
                'starting_price' => '50 000 FCFA',
                'status' => 'Sur réservation',
                'badge' => 'Artiste Visuelle'
            ]
        ];

        $serviceCatalog = [
            [
                'id' => 1,
                'title' => 'Création de Logo & Identité Visuelle Complète',
                'category' => 'Design & Branding',
                'category_slug' => 'design',
                'price' => '25 000 FCFA',
                'old_price' => '45 000 FCFA',
                'price_type' => 'Forfait dès',
                'delay' => '4 à 7 jours',
                'talent' => 'Kévin A.',
                'rating' => '4.9',
                'reviews_count' => 38,
                'image' => 'https://images.unsplash.com/photo-1626785774573-4b799315345d?auto=format&fit=crop&w=700&h=420&q=80',
                'description' => '3 propositions uniques, charte chromatique, typographies et fichiers vectoriels HD (PNG, SVG, AI).',
                'badge' => 'Meilleure vente'
            ],
            [
                'id' => 2,
                'title' => 'Site Vitrine Professionnel Moderne & Responsive',
                'category' => 'Développement Web',
                'category_slug' => 'tech',
                'price' => '120 000 FCFA',
                'old_price' => '180 000 FCFA',
                'price_type' => 'Forfait dès',
                'delay' => '10 à 15 jours',
                'talent' => 'Amina S.',
                'rating' => '5.0',
                'reviews_count' => 46,
                'image' => 'https://images.unsplash.com/photo-1547658719-da2b51169166?auto=format&fit=crop&w=700&h=420&q=80',
                'description' => 'Architecture moderne sur-mesure, formulaire de contact interactif, SEO local et mobile-first garanti.',
                'badge' => 'Recommandé'
            ],
            [
                'id' => 3,
                'title' => 'Pack 5 Vidéos Courtes Virales (Reels / TikTok)',
                'category' => 'Vidéo & Média',
                'category_slug' => 'media',
                'price' => '35 000 FCFA',
                'old_price' => '60 000 FCFA',
                'price_type' => 'Forfait dès',
                'delay' => '3 à 5 jours',
                'talent' => 'Farid D.',
                'rating' => '4.8',
                'reviews_count' => 29,
                'image' => 'https://images.unsplash.com/photo-1574717024653-61fd2cf4d44d?auto=format&fit=crop&w=700&h=420&q=80',
                'description' => 'Montage dynamique haute rétention, sous-titres animés, sound design percutant et formats 9:16.',
                'badge' => 'Tendance'
            ],
            [
                'id' => 4,
                'title' => 'Campagnes Publicitaires Meta & Google Ads',
                'category' => 'Marketing Digital',
                'category_slug' => 'marketing',
                'price' => '40 000 FCFA',
                'old_price' => '70 000 FCFA',
                'price_type' => 'Forfait dès',
                'delay' => '3 jours',
                'talent' => 'Grace M.',
                'rating' => '4.9',
                'reviews_count' => 22,
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=700&h=420&q=80',
                'description' => 'Ciblage d’audience précis au Bénin/Afrique de l’Ouest, création des créatifs publicitaires et suivi ROI.',
                'badge' => 'Meilleure vente'
            ],
            [
                'id' => 5,
                'title' => 'Design UI/UX Mobile Complet (Figma Prototype)',
                'category' => 'Product Design',
                'category_slug' => 'design',
                'price' => '75 000 FCFA',
                'old_price' => '120 000 FCFA',
                'price_type' => 'Forfait dès',
                'delay' => '7 à 10 jours',
                'talent' => 'Rolande K.',
                'rating' => '5.0',
                'reviews_count' => 31,
                'image' => 'https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?auto=format&fit=crop&w=700&h=420&q=80',
                'description' => '10 écrans mobiles interactifs, design system modulaire avec composants réutilisables et export développeur.',
                'badge' => 'Premium'
            ],
            [
                'id' => 6,
                'title' => 'Automatisation Devis, Factures & CRM (Make/Zapier)',
                'category' => 'No-Code & IA',
                'category_slug' => 'tech',
                'price' => '45 000 FCFA',
                'old_price' => '85 000 FCFA',
                'price_type' => 'Forfait dès',
                'delay' => '4 jours',
                'talent' => 'Sébastien T.',
                'rating' => '4.8',
                'reviews_count' => 19,
                'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=700&h=420&q=80',
                'description' => 'Connexion de vos formulaires avec génération PDF instantanée et alertes WhatsApp automatiques pour vos prospects.',
                'badge' => 'Gain de temps'
            ]
        ];

        $opportunities = [
            [
                'id' => 1,
                'type' => 'Mission Tech & SaaS',
                'title' => 'Développeur Fullstack Laravel & React pour Fintech',
                'client' => 'FinTech Béninoise · Cotonou',
                'client_name' => 'Fidèle K. (CTO)',
                'client_avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=120&h=120&q=80',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&h=380&q=80',
                'badge' => '100% Télétravail',
                'urgent' => true,
                'rating' => '4.9',
                'applicants_count' => 18,
                'budget' => '450 000 FCFA / mois',
                'duration' => '3 mois renouvelables',
                'tags' => ['Laravel 11', 'React', 'PostgreSQL', 'API']
            ],
            [
                'id' => 2,
                'type' => 'Product Design',
                'title' => 'Lead UI/UX Designer pour refonte d’application mobile',
                'client' => 'Startup Logistique · Calavi',
                'client_name' => 'Carine D. (Head of Product)',
                'client_avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=120&h=120&q=80',
                'image' => 'https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?auto=format&fit=crop&w=600&h=380&q=80',
                'badge' => 'Mission Ouverte',
                'urgent' => false,
                'rating' => '5.0',
                'applicants_count' => 12,
                'budget' => '380 000 FCFA (Forfait)',
                'duration' => '4 semaines',
                'tags' => ['Figma', 'Design System', 'Mobile iOS/Android']
            ],
            [
                'id' => 3,
                'type' => 'Média & Croissance',
                'title' => 'Directeur Artistique & Monteur Vidéo Formats Courts (Reels)',
                'client' => 'Marque Agroalimentaire Locale',
                'client_name' => 'Gilles B. (Marketing Lead)',
                'client_avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=120&h=120&q=80',
                'image' => 'https://images.unsplash.com/photo-1616469829941-c7200edec809?auto=format&fit=crop&w=600&h=380&q=80',
                'badge' => 'Temps Partiel',
                'urgent' => true,
                'rating' => '4.8',
                'applicants_count' => 9,
                'budget' => '220 000 FCFA / mois',
                'duration' => 'Contrat 6 mois',
                'tags' => ['Premiere Pro', 'Motion Design', 'TikTok/Reels']
            ]
        ];

        $testimonials = [
            'stories' => [
                [
                    'id' => 1,
                    'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=600&h=700&q=80',
                    'company' => 'FinTech Bénin Hub',
                    'tagline' => 'Comment Puno a automatisé 80% de sa gestion des leads',
                    'author' => 'David Lee',
                    'role' => 'Directeur Général, Puno Tech'
                ],
                [
                    'id' => 2,
                    'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&h=700&q=80',
                    'company' => 'SaaS Logistics West',
                    'tagline' => 'Mise à l’échelle de nos opérations grâce aux développeurs vérifiés',
                    'author' => 'Nathalie Mensah',
                    'role' => 'Co-fondatrice, SwiftLog Bénin'
                ]
            ],
            'quotes' => [
                [
                    'id' => 1,
                    'name' => 'David Lee',
                    'role' => 'Fondateur, Studio Digit',
                    'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&h=150&q=80',
                    'quote' => 'Nous passions des semaines sur des recrutements hasardeux. Leur système automatisé nous a fait économiser plus de 30 heures par mois et a transformé notre livraison client.',
                    'col' => 1
                ],
                [
                    'id' => 2,
                    'name' => 'Daniel Kim',
                    'role' => 'Directeur, ScaleLabs Africa',
                    'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&h=150&q=80',
                    'quote' => 'Notre processus d’onboarding exigeait un suivi manuel permanent. Grâce aux talents mobilisés via Talent Club, notre taux de conversion a bondi de 35% en un seul trimestre.',
                    'col' => 1
                ],
                [
                    'id' => 3,
                    'name' => 'Alex Johnson',
                    'role' => 'Head of Operations, Finovate Bénin',
                    'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&h=150&q=80',
                    'quote' => 'La sécurité et la conformité étaient nos priorités absolues. L’architecture conçue par l’équipe est robuste, scalable et de niveau international.',
                    'col' => 1
                ],
                [
                    'id' => 4,
                    'name' => 'Sarah Mitchell',
                    'role' => 'COO, BrightPath Solutions',
                    'avatar' => 'https://images.unsplash.com/photo-1589156280159-27698a70f29e?auto=format&fit=crop&w=150&h=150&q=80',
                    'quote' => 'Nous avions des difficultés de rétention et de suivi client. Les experts ont instauré des workflows clairs qui ont réduit nos frictions de 40% dès le premier mois.',
                    'col' => 2
                ],
                [
                    'id' => 5,
                    'name' => 'Jonathan Reed',
                    'role' => 'Managing Director, Nexora Digital Agency',
                    'avatar' => 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?auto=format&fit=crop&w=150&h=150&q=80',
                    'quote' => 'Notre croissance était rapide mais nous étions noyés dans l’exécution. Talent Club a unifié nos outils et nous a fait gagner 30+ heures par semaine sur nos pipelines.',
                    'col' => 2
                ],
                [
                    'id' => 6,
                    'name' => 'Michael Tran',
                    'role' => 'CEO, Skyline Realty Group',
                    'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=150&h=150&q=80',
                    'quote' => 'Nous avons divisé le temps administratif par deux et doublé nos rendez-vous clients qualifiés. Le retour sur investissement a été immédiat.',
                    'col' => 3
                ],
                [
                    'id' => 7,
                    'name' => 'Laura Martinez',
                    'role' => 'CMO, Elevate Commerce Co.',
                    'avatar' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&h=150&q=80',
                    'quote' => 'Le marketing automation était fragmenté avec trop d’outils disjoints. Ils ont réuni l’écosystème : alertes automatiques, scoring et relances avec une précision chirurgicale.',
                    'col' => 3
                ]
            ]
        ];

        return view('home.index', compact(
            'stats',
            'categories',
            'featuredTalents',
            'serviceCatalog',
            'opportunities',
            'testimonials'
        ));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email|max:150',
            'role' => 'nullable|string|max:50',
            'message' => 'required|string|min:10|max:2000',
        ]);

        // Simuler la réception réussie du contact avec log
        \Illuminate\Support\Facades\Log::info('Nouveau message de contact reçu', $validated);

        return redirect()->to(url('/#contact'))->with('contact_success', 'Merci ' . $validated['name'] . ' ! Votre message a bien été reçu. Notre équipe vous recontactera sous 24h.');
    }
}
