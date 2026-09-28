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
                'title' => 'Création de Logo & Identité Visuelle',
                'category' => 'Design & Branding',
                'price' => '25 000 FCFA',
                'price_type' => 'À partir de',
                'delay' => '4 à 7 jours',
                'talent' => 'Kévin A.',
                'rating' => '4.9',
                'description' => '3 propositions de concepts, fichiers vectoriels HD (PNG, SVG, AI) et guide d’utilisation des couleurs.',
                'badge' => 'Populaire'
            ],
            [
                'id' => 2,
                'title' => 'Site Vitrine Professionnel Moderne',
                'category' => 'Développement Web',
                'price' => '120 000 FCFA',
                'price_type' => 'À partir de',
                'delay' => '10 à 15 jours',
                'talent' => 'Amina S.',
                'rating' => '5.0',
                'description' => 'Design sur-mesure responsive, formulaire de contact, optimisation SEO mobile et nom de domaine configuré.',
                'badge' => 'Recommandé'
            ],
            [
                'id' => 3,
                'title' => 'Pack 5 Vidéos Courtes (Reels / TikTok)',
                'category' => 'Vidéo & Média',
                'price' => '35 000 FCFA',
                'price_type' => 'À partir de',
                'delay' => '3 à 5 jours',
                'talent' => 'Farid D.',
                'rating' => '4.8',
                'description' => 'Montage dynamique avec sous-titres animés, musique tendance et effets d’attention pour booster vos réseaux.',
                'badge' => 'Tendance'
            ],
            [
                'id' => 4,
                'title' => 'Audit & Stratégie Publicitaire Meta Ads',
                'category' => 'Marketing Digital',
                'price' => '40 000 FCFA',
                'price_type' => 'À partir de',
                'delay' => '3 jours',
                'talent' => 'Grace M.',
                'rating' => '4.9',
                'description' => 'Analyse approfondie de votre compte publicitaire, recommandations de ciblage et plan média pour rentabiliser vos pubs.',
                'badge' => 'Conversion'
            ],
            [
                'id' => 5,
                'title' => 'Design UI/UX Mobile (10 Écrans Figma)',
                'category' => 'Product Design',
                'price' => '75 000 FCFA',
                'price_type' => 'À partir de',
                'delay' => '7 à 10 jours',
                'talent' => 'Rolande K.',
                'rating' => '5.0',
                'description' => 'Wireframes, maquettes interactives haute fidélité et composants réutilisables prêts pour les développeurs.',
                'badge' => 'Premium'
            ],
            [
                'id' => 6,
                'title' => 'Automatisation Devis & Factures (Make/Zapier)',
                'category' => 'No-Code & IA',
                'price' => '45 000 FCFA',
                'price_type' => 'À partir de',
                'delay' => '4 jours',
                'talent' => 'Sébastien T.',
                'rating' => '4.8',
                'description' => 'Génération automatique de PDF à la validation d’un formulaire et notification instantanée par email/WhatsApp.',
                'badge' => 'Gain de temps'
            ]
        ];

        $opportunities = [
            [
                'id' => 1,
                'type' => 'Mission Freelance',
                'title' => 'Refonte UX/UI d’une application de paiement local',
                'client' => 'FinTech Béninoise · Cotonou',
                'budget' => '300 000 - 450 000 FCFA',
                'duration' => '3 semaines',
                'tags' => ['Figma', 'UI/UX', 'Mobile']
            ],
            [
                'id' => 2,
                'type' => 'Contrat de Mission',
                'title' => 'Développeur Backend Laravel pour API de livraison',
                'client' => 'Startup Logistique · Abomey-Calavi',
                'budget' => '250 000 FCFA / mois',
                'duration' => '2 mois renouvelables',
                'tags' => ['Laravel', 'MySQL', 'API REST']
            ],
            [
                'id' => 3,
                'type' => 'Collaboration Créative',
                'title' => 'Production vidéo & storytelling pour lancement de marque',
                'client' => 'Marque Agroalimentaire Locale',
                'budget' => '180 000 FCFA',
                'duration' => '10 jours',
                'tags' => ['Tournage', 'Montage', 'Motion']
            ]
        ];

        return view('home.index', compact(
            'stats',
            'categories',
            'featuredTalents',
            'serviceCatalog',
            'opportunities'
        ));
    }
}
