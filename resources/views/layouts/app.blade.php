<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TALENT CLUB | L'écosystème d'élite des talents béninois</title>
    <meta name="description" content="Découvrez, valorisez et connectez les jeunes talents béninois avec des entreprises, des particuliers et des opportunités d'affaires uniques.">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>✨</text></svg>">

    <!-- Google Fonts: Sora (Titres) & Montserrat (Texte) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (CDN for standalone reliability & speed) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Montserrat"', 'sans-serif'],
                        display: ['"Sora"', 'sans-serif'],
                    },
                    colors: {
                        // Charte Graphique Officielle
                        brand: {
                            dark: '#242619',       // 242619: Base Sombre Olive / Charcoal
                            primary: '#A7C123',    // A7C123: Vert Olive-Citron Principal
                            accent: '#D8F741',     // D8F741: Électrique Lime Vif
                            white: '#FFFFFF',      // FFFFFF: Blanc Pur
                            light: '#F8FAF0',      // Teinte ultra-douce pour fonds
                            surface: '#242619',
                            card: '#2A2D1E',
                            muted: '#666C52',
                            50: '#F8FAF0',
                            100: '#F1F7D7',
                            200: '#E4F1A8',
                            300: '#D8F741',        // Accent Électrique
                            400: '#BFDE28',
                            500: '#A7C123',        // Olive-Lime Principal
                            600: '#8FA61B',
                            700: '#6F8214',
                            800: '#4C590E',
                            900: '#333C09',
                            950: '#242619',        // Base Sombre
                        }
                    }
                }
            }
        }
    </script>

    <style>
        [x-cloak] { display: none !important; }
        ::selection {
            background-color: #D8F741;
            color: #242619;
        }
        .hero-gradient {
            background: radial-gradient(circle at 50% 0%, rgba(167, 193, 35, 0.15) 0%, rgba(36, 38, 25, 0) 70%);
        }
        .card-glow:hover {
            box-shadow: 0 12px 30px -10px rgba(167, 193, 35, 0.25);
        }
        .subtle-grid {
            background-size: 32px 32px;
            background-image: linear-gradient(to right, rgba(226, 232, 240, 0.6) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(226, 232, 240, 0.6) 1px, transparent 1px);
        }
    <!-- Leaflet CSS for real interactive maps -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    @livewireStyles
</head>
<body class="bg-[#FAFAFA] text-slate-900 font-sans antialiased selection:bg-[#D8F741] selection:text-[#242619] flex flex-col min-h-screen">

    <!-- Top Announcement Bar -->
    <div class="bg-[#242619] text-white/90 text-xs py-2 px-4 text-center border-b border-[#242619]/80">
        <div class="max-w-7xl mx-auto flex items-center justify-center gap-2">
            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-black bg-[#D8F741] text-[#242619]">NOUVEAU</span>
            <span>Talent Club ouvre l'accès à la première cohorte de talents béninois certifiés.</span>
            <a href="{{ url('/#talents') }}" class="text-[#D8F741] font-bold hover:underline inline-flex items-center gap-1 ml-1">Découvrir <span aria-hidden="true">&rarr;</span></a>
        </div>
    </div>

    <!-- Header / Navbar Component -->
    <x-navbar />

    <!-- Main Content Slot -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer Component -->
    <x-footer />

    <!-- Leaflet JS for real interactive maps -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    @livewireScripts
</body>
</html>
