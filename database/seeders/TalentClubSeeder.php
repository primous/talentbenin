<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Skill;
use Illuminate\Support\Str;

class TalentClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriesData = [
            [
                'name' => 'Développement Web & Mobile',
                'icon' => 'code',
                'description' => 'Laravel, React, Flutter, API, bases de données et solutions sur-mesure.',
                'skills' => ['Laravel', 'PHP', 'React', 'Vue.js', 'Next.js', 'Flutter', 'Tailwind CSS', 'Node.js', 'API REST', 'MySQL', 'PostgreSQL', 'Git']
            ],
            [
                'name' => 'Design & Identité Visuelle',
                'icon' => 'palette',
                'description' => 'Logos, chartes graphiques, UI/UX design sur Figma et supports de marque.',
                'skills' => ['Figma', 'UI Design', 'UX Research', 'Branding', 'Adobe Illustrator', 'Photoshop', 'Design System', 'Prototypage', 'Affiches & Print']
            ],
            [
                'name' => 'Marketing & Acquisition',
                'icon' => 'trending-up',
                'description' => 'Stratégie de croissance, social media, publicités Meta & Google Ads.',
                'skills' => ['Meta Ads', 'Google Ads', 'SEO', 'Community Management', 'Emailing', 'Copywriting', 'Growth Marketing', 'LinkedIn B2B', 'Analytics']
            ],
            [
                'name' => 'Vidéo, Motion & Photo',
                'icon' => 'video',
                'description' => 'Montage dynamique, formats courts Reels/TikTok, motion design et shooting.',
                'skills' => ['Premiere Pro', 'After Effects', 'Montage Reels/TikTok', 'Motion Design', 'Photographie Corporate', 'Colorimétrie', 'Sound Design', 'CapCut Pro']
            ],
            [
                'name' => 'Rédaction & Copywriting',
                'icon' => 'file-text',
                'description' => 'Pages de vente percutantes, articles SEO, storytelling et scripts vidéo.',
                'skills' => ['Copywriting', 'Rédaction SEO', 'Storytelling', 'Scripts Vidéo', 'Newsletters', 'Fiches Produits', 'Traduction']
            ],
            [
                'name' => 'Vente & Business',
                'icon' => 'briefcase',
                'description' => 'Prospection B2B, closing commercial, négociation et CRM.',
                'skills' => ['Prospection B2B', 'Closing', 'Négociation', 'Gestion CRM', 'Cold Emailing', 'Vente Téléphonique']
            ],
            [
                'name' => 'IA, Data & Automatisation',
                'icon' => 'cpu',
                'description' => 'Workflows Make/Zapier, intégrations IA, dashboards et pipelines de données.',
                'skills' => ['Make (Integromat)', 'Zapier', 'Prompt Engineering', 'Python', 'Power BI', 'Automatisation WhatsApp', 'Airtable']
            ],
            [
                'name' => 'Administration & Opérations',
                'icon' => 'check-square',
                'description' => 'Coordination Agile/Scrum, structuration d’équipes et organisation opérationnelle.',
                'skills' => ['Assistance Virtuelle', 'Notion', 'Gestion de Projet Agile', 'Scrum', 'Organisation Administrative', 'Service Client']
            ],
            [
                'name' => 'Finance & Comptabilité',
                'icon' => 'dollar-sign',
                'description' => 'Business plans, modélisation financière, déclarations fiscales et audit.',
                'skills' => ['Comptabilité Générale', 'Business Plan', 'Modélisation Excel', 'Fiscalité Béninoise', 'Audit Financier']
            ],
            [
                'name' => 'Formation & Conseil',
                'icon' => 'compass',
                'description' => 'Accompagnement de startups, transformation numérique et positionnement.',
                'skills' => ['Coaching Digital', 'Stratégie Go-To-Market', 'Formation d\'équipes', 'Audit d\'entreprise']
            ]
        ];

        foreach ($categoriesData as $cat) {
            $category = Category::updateOrCreate(
                ['slug' => Str::slug($cat['name'])],
                [
                    'name' => $cat['name'],
                    'icon' => $cat['icon'],
                    'description' => $cat['description']
                ]
            );

            foreach ($cat['skills'] as $skillName) {
                Skill::updateOrCreate(
                    ['slug' => Str::slug($skillName)],
                    [
                        'name' => $skillName,
                        'category_id' => $category->id
                    ]
                );
            }
        }
    }
}
