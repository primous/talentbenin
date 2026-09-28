<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TALENT CLUB | L'écosystème d'élite des talents béninois</title>
    <meta name="description" content="Découvrez, valorisez et connectez les jeunes talents béninois avec des entreprises, des particuliers et des opportunités d'affaires uniques.">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>✨</text></svg>">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (CDN for standalone reliability & speed) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        display: ['"Space Grotesk"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#F0FDF4',
                            100: '#DCFCE7',
                            200: '#BBF7D0',
                            300: '#86EFAC',
                            400: '#4ADE80',
                            500: '#10B981',
                            600: '#059669',
                            700: '#047857',
                            800: '#065F46',
                            900: '#064E3B',
                            dark: '#0A0E17',
                            surface: '#111827',
                            card: '#182234',
                            muted: '#64748B'
                        }
                    }
                }
            }
        }
    </script>

    <style>
        [x-cloak] { display: none !important; }
        ::selection {
            background-color: #059669;
            color: #ffffff;
        }
        .hero-gradient {
            background: radial-gradient(circle at 50% 0%, rgba(5, 150, 105, 0.12) 0%, rgba(10, 14, 23, 0) 70%);
        }
        .card-glow:hover {
            box-shadow: 0 12px 30px -10px rgba(5, 150, 105, 0.15);
        }
        .subtle-grid {
            background-size: 32px 32px;
            background-image: linear-gradient(to right, rgba(226, 232, 240, 0.6) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(226, 232, 240, 0.6) 1px, transparent 1px);
        }
    </style>
    @livewireStyles
</head>
<body class="bg-[#FAFAFA] text-slate-900 font-sans antialiased selection:bg-brand-600 selection:text-white flex flex-col min-h-screen">

    <!-- Top Announcement Bar -->
    <div class="bg-brand-dark text-slate-300 text-xs py-2 px-4 text-center border-b border-slate-800">
        <div class="max-w-7xl mx-auto flex items-center justify-center gap-2">
            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-semibold bg-brand-500/20 text-brand-400 border border-brand-500/30">NOUVEAU</span>
            <span>Talent Club ouvre l'accès à la première cohorte de talents béninois certifiés.</span>
            <a href="{{ url('/#talents') }}" class="text-white font-medium hover:underline inline-flex items-center gap-1 ml-1">Découvrir <span aria-hidden="true">&rarr;</span></a>
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

    @livewireScripts
</body>
</html>
