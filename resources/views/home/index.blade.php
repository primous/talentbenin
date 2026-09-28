<x-app-layout>

    <!-- =========================================================================
         1. HERO SECTION
         ========================================================================= -->
    <!-- =========================================================================
         1. HERO SECTION (UPWORK-INSPIRED FRAMED BANNER)
         ========================================================================= -->
    <section id="accueil" class="pt-4 sm:pt-6 pb-6 bg-[#FAFAFA]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-[28px] sm:rounded-[36px] overflow-hidden bg-[#242619] border border-[#242619] shadow-2xl min-h-[580px] lg:min-h-[630px] flex items-center">
                
                <!-- Atmospheric Background Image -->
                <img 
                    src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=2000&q=85" 
                    alt="Talents Béninois en action" 
                    class="absolute inset-0 w-full h-full object-cover object-center opacity-30 lg:opacity-40 filter contrast-110"
                >
                
                <!-- Deep Gradient Overlays for High Legibility -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#242619] via-[#242619]/90 to-[#242619]/40 z-0"></div>
                <div class="absolute inset-0 bg-radial-at-tr from-[#A7C123]/20 via-transparent to-transparent pointer-events-none"></div>

                <!-- Hero Content Container -->
                <div class="relative z-10 p-6 sm:p-12 lg:p-16 max-w-3xl space-y-6 sm:space-y-7">
                    
                    <!-- Headline in Sora -->
                    <h1 class="font-display font-extrabold text-3xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.08]">
                        Le talent béninois au rythme de votre ambition
                    </h1>

                    <!-- Subtitle in Montserrat -->
                    <p class="text-white/85 text-sm sm:text-base lg:text-lg leading-relaxed font-normal max-w-2xl">
                        Collaborez avec les experts et créatifs béninois les plus qualifiés pour propulser vos projets, développer votre entreprise et atteindre des résultats d'exception.
                    </p>

                    <!-- Dual Intent Switcher (Je recrute / Je cherche des missions) -->
                    <div class="inline-flex p-1 rounded-full bg-white/10 backdrop-blur-md border border-white/20 shadow-inner" x-data="{ userIntent: 'hire' }">
                        <button 
                            type="button" 
                            @click="userIntent = 'hire'" 
                            :class="userIntent === 'hire' ? 'bg-[#D8F741] text-[#242619] shadow-md font-bold' : 'text-white/80 hover:text-white font-medium'" 
                            class="px-5 sm:px-6 py-2 sm:py-2.5 rounded-full text-xs sm:text-sm transition-all duration-200"
                        >
                            Je veux recruter
                        </button>
                        <a 
                            href="{{ route('talent.application.create') }}" 
                            class="px-5 sm:px-6 py-2 sm:py-2.5 rounded-full text-xs sm:text-sm text-white/80 hover:text-white font-medium hover:bg-white/10 transition-all duration-200 flex items-center gap-1.5"
                        >
                            <span>Je cherche des missions</span>
                        </a>
                    </div>

                    <!-- Search Bar Pill (Upwork Style) -->
                    <div class="w-full max-w-2xl pt-1" x-data="{ searchQuery: '' }">
                        <form action="{{ url('/#talents') }}" method="GET" class="relative flex items-center bg-white rounded-full p-1.5 sm:p-2 shadow-2xl border border-white/30 transition-all focus-within:ring-2 focus-within:ring-[#A7C123]">
                            <input 
                                type="text" 
                                name="q"
                                x-model="searchQuery"
                                placeholder="Décrivez votre besoin (ex: Développeur Laravel, UI/UX Designer, Montage vidéo...)" 
                                class="w-full bg-transparent pl-4 sm:pl-6 pr-36 text-[#242619] placeholder-slate-400 text-xs sm:text-sm font-sans focus:outline-none"
                            >
                            <a 
                                href="{{ url('/#talents') }}" 
                                class="absolute right-1.5 sm:right-2 inline-flex items-center gap-2 px-5 sm:px-6 py-2.5 sm:py-3 rounded-full bg-[#D8F741] hover:bg-[#A7C123] text-[#242619] font-display font-bold text-xs sm:text-sm transition-all shadow-md shrink-0 group"
                            >
                                <svg class="w-4 h-4 text-[#242619] group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                                <span>Rechercher</span>
                            </a>
                        </form>
                    </div>

                    <!-- Quick Category Pills -->
                    <div class="flex flex-wrap items-center gap-2 pt-1 text-xs text-white/90">
                        <a href="{{ url('/#talents') }}" class="inline-flex items-center gap-1.5 px-3.5 sm:px-4 py-1.5 rounded-full border border-white/20 bg-white/5 backdrop-blur-xs hover:bg-white/15 hover:border-[#D8F741] hover:text-[#D8F741] transition-colors">
                            <span>Développement Web</span>
                            <span class="text-[#D8F741]">&rarr;</span>
                        </a>
                        <a href="{{ url('/#talents') }}" class="inline-flex items-center gap-1.5 px-3.5 sm:px-4 py-1.5 rounded-full border border-white/20 bg-white/5 backdrop-blur-xs hover:bg-white/15 hover:border-[#D8F741] hover:text-[#D8F741] transition-colors">
                            <span>UI/UX & Branding</span>
                            <span class="text-[#D8F741]">&rarr;</span>
                        </a>
                        <a href="{{ url('/#talents') }}" class="inline-flex items-center gap-1.5 px-3.5 sm:px-4 py-1.5 rounded-full border border-white/20 bg-white/5 backdrop-blur-xs hover:bg-white/15 hover:border-[#D8F741] hover:text-[#D8F741] transition-colors">
                            <span>Vidéo & Montage</span>
                            <span class="text-[#D8F741]">&rarr;</span>
                        </a>
                        <a href="{{ url('/#talents') }}" class="inline-flex items-center gap-1.5 px-3.5 sm:px-4 py-1.5 rounded-full border border-white/20 bg-white/5 backdrop-blur-xs hover:bg-white/15 hover:border-[#D8F741] hover:text-[#D8F741] transition-colors">
                            <span>Marketing Digital</span>
                            <span class="text-[#D8F741]">&rarr;</span>
                        </a>
                        <a href="{{ url('/#talents') }}" class="inline-flex items-center gap-1.5 px-3.5 sm:px-4 py-1.5 rounded-full border border-white/20 bg-white/5 backdrop-blur-xs hover:bg-white/15 hover:border-[#D8F741] hover:text-[#D8F741] transition-colors">
                            <span>No-Code & IA</span>
                            <span class="text-[#D8F741]">&rarr;</span>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- =========================================================================
         2. PARTNERS & TRUSTED BY SECTION (INSPIRÉ DE L'IMAGE 2)
         ========================================================================= -->
    <section class="bg-white border-b border-slate-200/80 py-12 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header (Monochrome Upwork style) -->
            <div class="text-center mb-10">
                <p class="text-[11px] sm:text-xs font-bold uppercase tracking-[0.2em] text-[#242619]/60 font-sans">
                    Ils font confiance aux talents du Bénin
                </p>
            </div>

            <!-- Partner Logos Strip -->
            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-6 sm:gap-8 items-center justify-center">
                
                <!-- 1. Sèmè City -->
                <div class="flex items-center justify-center p-3 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300 hover:scale-105 group" title="Sèmè City">
                    <div class="flex items-center gap-2">
                        <div class="w-7 h-7 rounded-lg bg-[#242619] group-hover:bg-[#A7C123] flex items-center justify-center text-white text-[10px] font-black tracking-tighter transition-colors">
                            SC
                        </div>
                        <span class="font-display font-extrabold text-sm tracking-tight text-[#242619] group-hover:text-[#A7C123] transition-colors">
                            SÈMÈ<span class="text-[#A7C123] font-medium">CITY</span>
                        </span>
                    </div>
                </div>

                <!-- 2. MTN Bénin -->
                <div class="flex items-center justify-center p-3 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300 hover:scale-105 group" title="MTN Bénin">
                    <div class="flex items-center gap-1.5">
                        <div class="w-8 h-5 rounded-full border-2 border-[#242619] group-hover:border-amber-500 flex items-center justify-center text-[10px] font-black text-[#242619] group-hover:text-amber-500 transition-colors">
                            MTN
                        </div>
                        <span class="font-display font-bold text-xs tracking-wider text-[#242619] transition-colors">
                            Bénin
                        </span>
                    </div>
                </div>

                <!-- 3. Moov Africa -->
                <div class="flex items-center justify-center p-3 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300 hover:scale-105 group" title="Moov Africa">
                    <div class="flex items-center gap-1">
                        <span class="font-display font-extrabold text-sm tracking-tighter text-[#242619] group-hover:text-blue-600 transition-colors">
                            moov
                        </span>
                        <span class="text-[9px] font-bold uppercase text-orange-500 bg-orange-50 px-1 py-0.5 rounded">
                            africa
                        </span>
                    </div>
                </div>

                <!-- 4. FedaPay -->
                <div class="flex items-center justify-center p-3 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300 hover:scale-105 group" title="FedaPay">
                    <div class="flex items-center gap-1.5">
                        <div class="w-6 h-6 rounded-md bg-[#242619] group-hover:bg-blue-600 flex items-center justify-center text-white text-xs font-bold transition-colors">
                            F
                        </div>
                        <span class="font-display font-bold text-sm tracking-tight text-[#242619] group-hover:text-blue-600 transition-colors">
                            Feda<span class="text-blue-500 font-extrabold">Pay</span>
                        </span>
                    </div>
                </div>

                <!-- 5. KKiaPay -->
                <div class="flex items-center justify-center p-3 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300 hover:scale-105 group" title="KKiaPay">
                    <div class="flex items-center gap-1">
                        <span class="w-2 h-2 rounded-full bg-[#242619] group-hover:bg-[#A7C123] transition-colors"></span>
                        <span class="font-display font-extrabold text-sm tracking-tight text-[#242619] group-hover:text-[#A7C123] transition-colors">
                            kkiapay
                        </span>
                    </div>
                </div>

                <!-- 6. Gozem -->
                <div class="flex items-center justify-center p-3 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300 hover:scale-105 group" title="Gozem">
                    <div class="flex items-center gap-1.5">
                        <span class="font-display font-black text-sm tracking-tight text-[#242619] group-hover:text-[#A7C123] transition-colors">
                            gozem
                        </span>
                        <span class="w-1.5 h-1.5 rounded-full bg-[#A7C123]"></span>
                    </div>
                </div>

                <!-- 7. Canal+ Bénin -->
                <div class="flex items-center justify-center p-3 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300 hover:scale-105 group" title="Canal+ Bénin">
                    <div class="px-2 py-0.5 rounded border border-[#242619] group-hover:border-[#242619] group-hover:bg-[#242619] flex items-center gap-1 transition-all">
                        <span class="font-display font-extrabold text-[11px] text-[#242619] group-hover:text-white transition-colors">
                            CANAL+
                        </span>
                    </div>
                </div>

                <!-- 8. Isocel Telecom -->
                <div class="flex items-center justify-center p-3 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300 hover:scale-105 group" title="Isocel Telecom">
                    <div class="flex items-center gap-1">
                        <span class="font-display font-extrabold text-sm tracking-wider text-[#242619] group-hover:text-cyan-600 transition-colors">
                            ISOCEL
                        </span>
                    </div>
                </div>

            </div>

            <!-- Key Ecosystem Metrics Strip -->
            <div class="mt-12 pt-10 border-t border-slate-100 grid grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 text-center sm:text-left">
                @foreach($stats as $stat)
                    <div class="sm:px-4">
                        <div class="font-display font-extrabold text-2xl sm:text-3xl lg:text-4xl text-[#242619] tracking-tight">
                            {{ $stat['value'] }}
                        </div>
                        <div class="text-xs font-bold uppercase tracking-wider text-[#A7C123] mt-1 font-sans">
                            {{ $stat['label'] }}
                        </div>
                        <div class="text-xs text-slate-600 mt-0.5 font-sans">
                            {{ $stat['detail'] }}
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    <!-- =========================================================================
         3. DOUBLE IMPACT · POUR LES TALENTS & POUR LES ENTREPRISES (INSPIRÉ DE L'IMAGE 3)
         ========================================================================= -->
    <section id="double-impact" class="py-20 sm:py-24 bg-[#242619] text-white border-b border-[#242619] relative overflow-hidden">
        <!-- Ambient Radial Glows & Dot Texture -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-[#D8F741]/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-[#A7C123]/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(#373A27_1px,transparent_1px)] [background-size:24px_24px] opacity-40 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-12">
            
            <!-- Top Slanted Lime Badge & Header (Image 3 style) -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div class="space-y-4 max-w-2xl">
                    <div class="inline-block">
                        <span class="inline-block transform -rotate-1 px-4 py-1.5 rounded-xl bg-[#D8F741] text-[#242619] font-display font-black text-xs sm:text-sm tracking-tight shadow-md border-2 border-white">
                            Double Impact · Talent Club
                        </span>
                    </div>
                    <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight leading-[1.15]">
                        Un écosystème conçu <br>
                        <span class="text-[#D8F741]">pour les deux mondes</span>
                    </h2>
                    <p class="text-sm sm:text-base text-slate-300 font-sans leading-relaxed">
                        Choisissez la trajectoire adaptée à votre ambition : propulsez votre croissance d'entreprise ou donnez une dimension d'exception à votre savoir-faire.
                    </p>
                </div>

                <div class="hidden md:flex items-center gap-2">
                    <span class="px-4 py-2 rounded-full border border-white/20 bg-white/5 text-xs text-slate-300 font-semibold font-sans backdrop-blur-sm shadow-inner">
                        100% Vérifié & Audité
                    </span>
                </div>
            </div>

            <!-- 2 Asymmetric Dual Cards (Image 3: White Card + Lime Card) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">
                
                <!-- Card 1: POUR LES JEUNES TALENTS (White Card like Image 3 left card) -->
                <div id="rejoindre" class="bg-white text-[#242619] rounded-[32px] p-7 sm:p-10 lg:p-12 border border-slate-200 shadow-2xl relative overflow-hidden flex flex-col justify-between group hover:-translate-y-1 transition-all duration-300">
                    <div class="space-y-6 relative z-10">
                        <!-- Top Slanted Pill -->
                        <div class="inline-block">
                            <span class="px-3.5 py-1.5 rounded-xl bg-[#242619] text-[#D8F741] font-display font-black text-xs tracking-wider shadow-sm">
                                Pour les jeunes talents
                            </span>
                        </div>

                        <!-- Title -->
                        <h3 class="font-display font-black text-2xl sm:text-[28px] text-[#242619] tracking-tight leading-snug">
                            Valorisez votre expertise, décrochez des contrats qualifiés
                        </h3>

                        <!-- Body -->
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-sans">
                            « Votre compétence mérite d'être vue et reconnue. » Fini la prospection fastidieuse, les négociations au rabais et les impayés. Bénéficiez d'une vitrine certifiée, d'un accompagnement exigeant et d'un flux continu de missions stimulantes.
                        </p>

                        <!-- Feature Chips -->
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-3.5 py-1.5 rounded-full bg-[#F8FAF0] border border-[#A7C123]/30 text-xs font-bold text-[#242619]">
                                Missions Freelance
                            </span>
                            <span class="px-3.5 py-1.5 rounded-full bg-[#F8FAF0] border border-[#A7C123]/30 text-xs font-bold text-[#242619]">
                                Contrats CDI & Hybrides
                            </span>
                            <span class="px-3.5 py-1.5 rounded-full bg-[#F8FAF0] border border-[#A7C123]/30 text-xs font-bold text-[#242619]">
                                Facturation Sécurisée
                            </span>
                        </div>
                    </div>

                    <!-- Bottom Action Row with Circular Arrow Button (Image 3 style) -->
                    <div class="pt-8 mt-6 border-t border-slate-100 flex items-center justify-between gap-4 relative z-10">
                        <a href="{{ route('talent.application.create') }}" class="w-full inline-flex items-center justify-between px-6 py-4 rounded-full bg-[#242619] hover:bg-[#333722] text-white font-display font-bold text-sm transition-all duration-200 shadow-md group">
                            <span>Postuler et rejoindre le Club</span>
                            <span class="w-8 h-8 rounded-full bg-white/20 text-[#D8F741] flex items-center justify-center text-sm font-black group-hover:bg-[#D8F741] group-hover:text-[#242619] transition-all">
                                &rarr;
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Card 2: POUR LES ENTREPRISES & PME (Vibrant Lime Card like Image 3 right card) -->
                <div id="entreprises" class="bg-[#D8F741] text-[#242619] rounded-[32px] p-7 sm:p-10 lg:p-12 border-2 border-[#BFDE28] shadow-2xl relative overflow-hidden flex flex-col justify-between group hover:-translate-y-1 transition-all duration-300">
                    <div class="space-y-6 relative z-10">
                        <!-- Top Slanted Pill -->
                        <div class="inline-block">
                            <span class="px-3.5 py-1.5 rounded-xl bg-[#242619] text-white font-display font-black text-xs tracking-wider shadow-sm">
                                Pour les entreprises & PME
                            </span>
                        </div>

                        <!-- Title -->
                        <h3 class="font-display font-black text-2xl sm:text-[28px] text-[#242619] tracking-tight leading-snug">
                            Recrutez le top 5% des profils béninois sans perte de temps
                        </h3>

                        <!-- Body -->
                        <p class="text-xs sm:text-sm text-[#242619]/90 leading-relaxed font-sans font-medium">
                            « Vous avez un projet. Nous avons le talent prêt à agir. » Accédez sans délai aux développeurs, designers et spécialistes du numérique béninois les plus rigoureux, avec devis transparents et engagements stricts sur les délais.
                        </p>

                        <!-- Feature Chips -->
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-3.5 py-1.5 rounded-full bg-white/80 backdrop-blur-sm border border-[#242619]/15 text-xs font-bold text-[#242619] shadow-xs">
                                Profils 100% Vetted
                            </span>
                            <span class="px-3.5 py-1.5 rounded-full bg-white/80 backdrop-blur-sm border border-[#242619]/15 text-xs font-bold text-[#242619] shadow-xs">
                                Disponibilité &lt; 48h
                            </span>
                            <span class="px-3.5 py-1.5 rounded-full bg-white/80 backdrop-blur-sm border border-[#242619]/15 text-xs font-bold text-[#242619] shadow-xs">
                                Facturation Locale FCFA
                            </span>
                        </div>
                    </div>

                    <!-- Bottom Action Row with Circular Arrow Button (Image 3 style) -->
                    <div class="pt-8 mt-6 border-t border-[#242619]/15 flex items-center justify-between gap-4 relative z-10">
                        <a href="{{ url('/#talents') }}" class="w-full inline-flex items-center justify-between px-6 py-4 rounded-full bg-[#242619] hover:bg-black text-[#D8F741] font-display font-bold text-sm transition-all duration-200 shadow-md group">
                            <span>Recruter un talent vérifié</span>
                            <span class="w-8 h-8 rounded-full bg-[#D8F741] text-[#242619] flex items-center justify-center text-sm font-black group-hover:scale-110 transition-transform">
                                &rarr;
                            </span>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- =========================================================================
         4. TALENTS À DÉCOUVRIR (INSPIRÉ DE L'IMAGE 1 - MÉDICAL / DOCTEUR STYLE)
         ========================================================================= -->
    <section id="talents" class="py-20 bg-[#F8FAF0] border-b border-slate-200/80" x-data="{ activeCategory: 'all' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            
            <!-- Section Header (Image 1 style with pill badge, title, subtitle & category tabs) -->
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
                <div class="space-y-3 max-w-2xl">
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#F1F7D7] border border-[#A7C123]/40 text-[#242619] text-xs font-bold">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#A7C123] animate-pulse"></span>
                        <span>Talents Vetted & Certifiés</span>
                    </div>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-[#242619] tracking-tight">
                        Découvrez les talents béninois d'exception
                    </h2>
                    <p class="text-sm text-slate-600 leading-relaxed font-sans">
                        Des compétences réelles, des projets audités et une disponibilité immédiate pour propulser vos projets d'entreprise.
                    </p>
                </div>

                <!-- Interactive Category Filter Tabs -->
                <div class="flex items-center gap-2 overflow-x-auto pb-2 lg:pb-0">
                    <button
                        type="button"
                        @click="activeCategory = 'all'"
                        :class="activeCategory === 'all' ? 'bg-[#242619] text-[#D8F741] shadow-md' : 'bg-white text-[#242619] border border-slate-200 hover:border-[#A7C123]'"
                        class="px-4 py-2 rounded-xl text-xs font-bold transition-all cursor-pointer shrink-0">
                        Tous les talents
                    </button>
                    <button
                        type="button"
                        @click="activeCategory = 'tech'"
                        :class="activeCategory === 'tech' ? 'bg-[#242619] text-[#D8F741] shadow-md' : 'bg-white text-[#242619] border border-slate-200 hover:border-[#A7C123]'"
                        class="px-4 py-2 rounded-xl text-xs font-semibold transition-all cursor-pointer shrink-0">
                        Tech & Web
                    </button>
                    <button
                        type="button"
                        @click="activeCategory = 'design'"
                        :class="activeCategory === 'design' ? 'bg-[#242619] text-[#D8F741] shadow-md' : 'bg-white text-[#242619] border border-slate-200 hover:border-[#A7C123]'"
                        class="px-4 py-2 rounded-xl text-xs font-semibold transition-all cursor-pointer shrink-0">
                        Design & Branding
                    </button>
                    <button
                        type="button"
                        @click="activeCategory = 'media'"
                        :class="activeCategory === 'media' ? 'bg-[#242619] text-[#D8F741] shadow-md' : 'bg-white text-[#242619] border border-slate-200 hover:border-[#A7C123]'"
                        class="px-4 py-2 rounded-xl text-xs font-semibold transition-all cursor-pointer shrink-0">
                        Média & Vidéo
                    </button>
                </div>
            </div>

            <!-- Talents Cards Grid (Framed Portrait Cards like Image 1) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($featuredTalents as $talent)
                    <div x-show="activeCategory === 'all' || activeCategory === '{{ $talent['category'] ?? 'tech' }}'"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100">
                        <x-talent-card :talent="$talent" />
                    </div>
                @endforeach
            </div>

            <!-- Bottom Talents Callout -->
            <div class="p-6 sm:p-8 rounded-3xl bg-white border border-[#A7C123]/25 shadow-sm flex flex-col sm:flex-row items-center justify-between gap-6 text-center sm:text-left">
                <div class="flex items-center gap-4">

                    <div>
                        <h4 class="font-display font-bold text-base text-[#242619]">Vous avez un profil d'exception au Bénin ?</h4>
                        <p class="text-xs text-slate-600 mt-0.5 font-sans">Rejoignez le collectif et accédez aux opportunités professionnelles les plus valorisantes.</p>
                    </div>
                </div>
                <a href="{{ route('talent.application.create') }}" class="px-6 py-3 rounded-full bg-[#A7C123] hover:bg-[#D8F741] text-[#242619] text-xs font-bold transition-all shadow-sm hover:shadow-md hover:scale-[1.02] shrink-0">
                    Rejoindre le collectif de talents &rarr;
                </a>
            </div>
        </div>
    </section>


    <!-- =========================================================================
         4. LE CATALOGUE DES SERVICES (INSPIRÉ DE L'IMAGE 2 - UDEMY STYLE)
         ========================================================================= -->
    <section id="services" class="py-20 bg-white border-b border-slate-200/80" x-data="{ serviceTab: 'all' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            
            <!-- Section Header (Image 2 style) -->
            <div class="space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-[#A7C123]">Le Catalogue des Services</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-[#242619] tracking-tight">
                    « Votre besoin. Le bon talent. »
                </h2>
                <p class="text-sm text-slate-600 max-w-2xl leading-relaxed font-sans">
                    Des prestations packagées délivrées par nos talents certifiés avec livrables garantis, délais stricts et tarifs transparents en FCFA.
                </p>
            </div>

            <!-- Tab Navigation Bar (Image 2 style: Le plus populaire, Nouveautés, Tendances...) -->
            <div class="flex items-center gap-6 border-b border-slate-200 pb-3 text-sm font-semibold text-slate-600 overflow-x-auto">
                <button 
                    type="button" 
                    @click="serviceTab = 'all'" 
                    :class="serviceTab === 'all' ? 'text-[#242619] border-b-2 border-[#242619] pb-3 -mb-3.5 font-bold' : 'hover:text-[#242619]'"
                    class="transition-colors cursor-pointer shrink-0">
                    Le plus populaire
                </button>
                <button 
                    type="button" 
                    @click="serviceTab = 'tech'" 
                    :class="serviceTab === 'tech' ? 'text-[#242619] border-b-2 border-[#242619] pb-3 -mb-3.5 font-bold' : 'hover:text-[#242619]'"
                    class="transition-colors cursor-pointer shrink-0">
                    Tech & Développement
                </button>
                <button 
                    type="button" 
                    @click="serviceTab = 'design'" 
                    :class="serviceTab === 'design' ? 'text-[#242619] border-b-2 border-[#242619] pb-3 -mb-3.5 font-bold' : 'hover:text-[#242619]'"
                    class="transition-colors cursor-pointer shrink-0">
                    Design & Branding
                </button>
                <button 
                    type="button" 
                    @click="serviceTab = 'marketing'" 
                    :class="serviceTab === 'marketing' ? 'text-[#242619] border-b-2 border-[#242619] pb-3 -mb-3.5 font-bold' : 'hover:text-[#242619]'"
                    class="transition-colors cursor-pointer shrink-0">
                    Marketing & Acquisition
                </button>
                <button 
                    type="button" 
                    @click="serviceTab = 'media'" 
                    :class="serviceTab === 'media' ? 'text-[#242619] border-b-2 border-[#242619] pb-3 -mb-3.5 font-bold' : 'hover:text-[#242619]'"
                    class="transition-colors cursor-pointer shrink-0">
                    Vidéo & Média
                </button>
            </div>

            <!-- Services Grid (Image 2 style with media thumbnail, badges, ratings, prices) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($serviceCatalog as $service)
                    <div x-show="serviceTab === 'all' || serviceTab === '{{ $service['category_slug'] ?? 'tech' }}'"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100">
                        <x-service-card :service="$service" />
                    </div>
                @endforeach
            </div>

            <!-- Bottom Explorer CTA -->
            <div class="text-center pt-4">
                <a href="{{ url('/#entreprises') }}" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-full bg-[#F8FAF0] hover:bg-[#F1F7D7] border border-[#A7C123]/30 text-[#242619] text-xs sm:text-sm font-bold transition-all shadow-xs hover:shadow-sm">
                    <span>Explorer l'ensemble des prestations au catalogue</span>
                    <span class="text-[#242619]">&rarr;</span>
                </a>
            </div>

        </div>
    </section>


    <!-- =========================================================================
         5. PROCESSUS SIMPLIFIÉ (INSPIRÉ DE L'IMAGE 3 - CARTES VERTES & STATS)
         ========================================================================= -->
    <section id="comment-ca-marche" class="py-20 sm:py-24 bg-[#F8FAF0] border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-14">
            
            <!-- Section Header (Notre Processus / Des solutions pour faire grandir...) -->
            <div class="text-center max-w-3xl mx-auto space-y-3">
                <span class="text-xs font-bold tracking-[0.15em] text-[#A7C123] block">
                    Notre processus
                </span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-5xl text-[#242619] tracking-tight leading-tight">
                    Des solutions pour faire grandir <br>
                    <span class="text-[#A7C123]">votre activité</span>
                </h2>
                <p class="text-sm sm:text-base text-slate-600 max-w-xl mx-auto leading-relaxed font-sans">
                    De la définition de votre besoin à la livraison finale, nous sécurisons chaque étape avec rigueur et transparence.
                </p>
            </div>

            <!-- 3 Process Cards (Rounded illustrations & circular action buttons) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Card 1: Définition du besoin -->
                <div class="bg-white rounded-[32px] p-6 sm:p-7 border border-[#A7C123]/30 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-5">
                        <!-- Top Icon in Circle -->
                        <div class="w-12 h-12 rounded-full bg-[#242619] text-[#D8F741] flex items-center justify-center shadow-sm">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </div>

                        <!-- Card Image Illustration -->
                        <div class="aspect-[16/11] rounded-2xl overflow-hidden bg-[#242619] shadow-inner">
                            <img 
                                src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=700&h=450&q=80" 
                                alt="Définition du besoin" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90"
                            >
                        </div>

                        <!-- Title & Description -->
                        <div class="space-y-2">
                            <h3 class="font-display font-bold text-lg text-[#242619] tracking-tight">
                                01. Définissez votre besoin
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-sans">
                                Recherchez une compétence spécifique ou choisissez directement un pack clé en main au catalogue avec périmètre et délais clairs.
                            </p>
                        </div>
                    </div>

                    <!-- Bottom Circular Arrow Button -->
                    <div class="pt-6 flex justify-end">
                        <a href="{{ url('/#talents') }}" class="w-11 h-11 rounded-full bg-[#A7C123] hover:bg-[#D8F741] text-[#242619] flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Sélection sur-mesure (Dark Charcoal Olive Hero card) -->
                <div class="bg-[#242619] text-white rounded-[32px] p-6 sm:p-7 border border-[#242619] shadow-xl hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-5">
                        <!-- Top Icon in Circle (Vibrant Lime) -->
                        <div class="w-12 h-12 rounded-full bg-[#D8F741] text-[#242619] flex items-center justify-center shadow-sm font-bold">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>

                        <!-- Card Image Illustration -->
                        <div class="aspect-[16/11] rounded-2xl overflow-hidden bg-black/40 shadow-inner">
                            <img 
                                src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=700&h=450&q=80" 
                                alt="Sélection sur-mesure" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90"
                            >
                        </div>

                        <!-- Title & Description -->
                        <div class="space-y-2">
                            <h3 class="font-display font-bold text-lg text-white tracking-tight">
                                02. Sélection sur-mesure
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-300 leading-relaxed font-sans">
                                Consultez le portfolio, les réalisations réelles et les avis certifiés du profil sélectionné parmi notre vivier préalablement audité.
                            </p>
                        </div>
                    </div>

                    <!-- Bottom Circular Arrow Button -->
                    <div class="pt-6 flex justify-end">
                        <a href="{{ url('/#talents') }}" class="w-11 h-11 rounded-full bg-[#D8F741] hover:bg-[#A7C123] text-[#242619] flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Card 3: Collaboration directe -->
                <div class="bg-white rounded-[32px] p-6 sm:p-7 border border-[#A7C123]/30 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-5">
                        <!-- Top Icon in Circle -->
                        <div class="w-12 h-12 rounded-full bg-[#242619] text-[#D8F741] flex items-center justify-center shadow-sm">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                            </svg>
                        </div>

                        <!-- Card Image Illustration -->
                        <div class="aspect-[16/11] rounded-2xl overflow-hidden bg-[#242619] shadow-inner">
                            <img 
                                src="https://images.unsplash.com/photo-1616469829941-c7200edec809?auto=format&fit=crop&w=700&h=450&q=80" 
                                alt="Collaboration directe" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90"
                            >
                        </div>

                        <!-- Title & Description -->
                        <div class="space-y-2">
                            <h3 class="font-display font-bold text-lg text-[#242619] tracking-tight">
                                03. Collaboration directe
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-sans">
                                Le talent reçoit votre demande, ajuste les spécifications et démarre immédiatement. Facturation sécurisée en monnaie locale.
                            </p>
                        </div>
                    </div>

                    <!-- Bottom Circular Arrow Button -->
                    <div class="pt-6 flex justify-end">
                        <a href="{{ url('/#entreprises') }}" class="w-11 h-11 rounded-full bg-[#A7C123] hover:bg-[#D8F741] text-[#242619] flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Bottom Stats Banner (Image 3 bottom dark banner) -->
            <div class="bg-[#242619] text-white rounded-[28px] p-6 sm:p-10 border border-[#242619] shadow-2xl grid grid-cols-1 sm:grid-cols-3 gap-8 items-center">
                
                <!-- Stat 1 -->
                <div class="flex items-center gap-4 sm:border-r sm:border-white/10 sm:pr-6">
                    <div class="w-12 h-12 rounded-2xl bg-[#D8F741]/20 border border-[#D8F741]/30 text-[#D8F741] flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div>
                        <div class="font-display font-black text-2xl sm:text-3xl text-white tracking-tight">120+</div>
                        <div class="text-xs text-slate-300 font-medium font-sans">Clients & entreprises accompagnés</div>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="flex items-center gap-4 sm:border-r sm:border-white/10 sm:pr-6">
                    <div class="w-12 h-12 rounded-2xl bg-[#D8F741]/20 border border-[#D8F741]/30 text-[#D8F741] flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div>
                        <div class="font-display font-black text-2xl sm:text-3xl text-white tracking-tight">&lt; 48h</div>
                        <div class="text-xs text-slate-300 font-medium font-sans">Délai moyen de mise en relation</div>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-[#D8F741]/20 border border-[#D8F741]/30 text-[#D8F741] flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <div>
                        <div class="font-display font-black text-2xl sm:text-3xl text-white tracking-tight">350+</div>
                        <div class="text-xs text-slate-300 font-medium font-sans">Projets livrés avec succès</div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- =========================================================================
         6. LA PHILOSOPHIE TALENT CLUB (INSPIRÉ DE L'IMAGE 1)
         ========================================================================= -->
    <section id="philosophie" class="py-20 sm:py-24 bg-[#F8FAF0] border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <!-- Main Editorial Card -->
            <div class="bg-white rounded-[36px] p-8 sm:p-12 lg:p-16 border border-slate-200/90 shadow-xl max-w-4xl mx-auto space-y-6">
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#F1F7D7] border border-[#A7C123]/40 text-[#242619] text-xs font-bold font-sans">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#A7C123]"></span>
                    <span>NOTRE MANIFESTE & VISION</span>
                </div>

                <h2 class="font-display font-black text-3xl sm:text-4xl text-[#242619] tracking-tight leading-snug">
                    Maximiser l'impact, l'élévation et la synergie de nos talents au quotidien
                </h2>

                <blockquote class="border-l-4 border-[#A7C123] pl-4 text-base font-semibold text-[#242619] italic font-sans">
                    « Il est bien de gagner seul. Il est encore plus intéressant de construire un système dans lequel nous pouvons progresser, collaborer et réussir ensemble. »
                </blockquote>

                <p class="text-slate-600 text-sm sm:text-base leading-relaxed font-sans">
                    Talent Club dépasse le simple cadre d'une plateforme de mise en relation. C'est l'infrastructure humaine et technologique où la jeunesse béninoise échange ses savoirs, s'entraide sur les défis techniques complexes et bâtit des projets reconnus sur la scène internationale.
                </p>

                <div class="pt-2 flex flex-wrap items-center gap-4">
                    <a href="{{ route('talent.application.create') }}" class="px-7 py-3.5 rounded-full bg-[#242619] hover:bg-[#A7C123] text-white hover:text-[#242619] font-display font-bold text-xs sm:text-sm transition-all shadow-md">
                        Rejoindre la communauté &rarr;
                    </a>
                    <a href="#temoignages" class="px-5 py-3.5 rounded-full border border-slate-300 hover:border-[#242619] text-[#242619] font-display font-bold text-xs sm:text-sm transition-colors">
                        Voir les retours
                    </a>
                </div>
            </div>

            <!-- Bottom: Key Reasons To Choose Us (Image 1 bottom part) -->
            <div class="space-y-8">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#A7C123]">Pourquoi nous faire confiance</span>
                        <h3 class="font-display font-extrabold text-2xl sm:text-3xl text-[#242619] tracking-tight mt-1">
                            Les Piliers Clés de Talent Club
                        </h3>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 max-w-md font-sans">
                        Quel que soit le profil technique recherché ou le défi à relever, nous garantissons rigueur, réactivité et conformité totale.
                    </p>
                </div>

                <!-- 3 Reason Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <!-- Reason Card 1 -->
                    <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-xs hover:shadow-md transition-all space-y-3">
                        <div class="flex items-center gap-2 text-xs font-bold uppercase text-slate-500 font-sans">
                            <span>Membres Actifs</span>
                        </div>
                        <div class="font-display font-black text-4xl text-[#242619] tracking-tight">
                            500+
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed font-sans">
                            Talents béninois rigoureusement audités sur tests techniques et portfolios réels avant toute mise en relation.
                        </p>
                    </div>

                    <!-- Reason Card 2 -->
                    <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-xs hover:shadow-md transition-all space-y-3">
                        <div class="flex items-center gap-2 text-xs font-bold uppercase text-slate-500 font-sans">
                            <span>Satisfaction & Livraison</span>
                        </div>
                        <div class="font-display font-black text-4xl text-[#242619] tracking-tight">
                            98%
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed font-sans">
                            Des projets menés à leur terme dans le respect scrupuleux du cahier des charges et des délais impartis.
                        </p>
                    </div>

                    <!-- Reason Card 3 -->
                    <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-xs hover:shadow-md transition-all space-y-3">
                        <div class="flex items-center gap-2 text-xs font-bold uppercase text-slate-500 font-sans">
                            <span>Réactivité Constatée</span>
                        </div>
                        <div class="font-display font-black text-4xl text-[#242619] tracking-tight">
                            &lt; 48h
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed font-sans">
                            Délai moyen record pour présélectionner et mettre en relation le profil idéal avec l'entreprise demandeuse.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <!-- =========================================================================
         8. OFFRES & MISSIONS RÉCENTES (INSPIRÉ DE L'IMAGE 2)
         ========================================================================= -->
    <section id="opportunites" class="py-20 sm:py-24 bg-white border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            
            <!-- Section Header (Image 2 style: Title + "Voir toutes les offres ->") -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div class="space-y-2">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#A7C123]">Offres & Missions Récentes</span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-[#242619] tracking-tight">
                        « Les compétences créent des opportunités. »
                    </h2>
                    <p class="text-sm text-slate-600 max-w-xl font-sans">
                        Missions freelance, contrats tech & design, et postes stratégiques confiés en exclusivité à la communauté Talent Club.
                    </p>
                </div>

                <a href="{{ route('talent.application.create') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-[#F8FAF0] hover:bg-[#F1F7D7] border border-[#A7C123]/30 text-xs font-bold text-[#242619] transition-all shrink-0 shadow-xs">
                    <span>Explorer toutes les offres</span>
                    <span class="text-[#A7C123] font-black">&rarr;</span>
                </a>
            </div>

            <!-- Opportunities Grid (Image 2 Course style Cards) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($opportunities as $opportunity)
                    <div class="bg-white rounded-[28px] border border-slate-200/90 hover:border-[#A7C123] hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group">
                        <div>
                            <!-- Card Image Banner with Pill Badges (Image 2 style) -->
                            <div class="aspect-[16/10] overflow-hidden relative bg-slate-100">
                                <img 
                                    src="{{ $opportunity['image'] }}" 
                                    alt="{{ $opportunity['title'] }}" 
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>

                                <!-- Floating Badges on Image (Image 2 style) -->
                                <div class="absolute top-3 left-3 flex items-center gap-1.5">
                                    <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-[#242619]/90 text-white backdrop-blur-md">
                                        {{ $opportunity['badge'] }}
                                    </span>
                                    @if($opportunity['urgent'])
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-black bg-[#D8F741] text-[#242619] shadow-sm">
                                            Urgent
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- Card Body -->
                            <div class="p-6 space-y-3">
                                
                                <!-- Title in 2 lines bold -->
                                <h3 class="font-display font-bold text-base sm:text-lg text-[#242619] group-hover:text-[#A7C123] transition-colors line-clamp-2 leading-snug">
                                    {{ $opportunity['title'] }}
                                </h3>

                                <!-- Rating & Social proof (Image 2 style) -->
                                <div class="flex items-center gap-1.5 text-xs">
                                    <span class="text-[#A7C123] font-bold">★ {{ $opportunity['rating'] }}</span>
                                    <span class="text-slate-500 font-sans">({{ $opportunity['applicants_count'] }} candidatures)</span>
                                </div>

                                <!-- Category & Skill Tags -->
                                <div class="flex flex-wrap gap-1.5 pt-1">
                                    @foreach($opportunity['tags'] as $tag)
                                        <span class="px-2.5 py-0.5 rounded-md bg-[#F1F7D7] text-[#242619] text-[10px] font-bold border border-[#A7C123]/25 font-sans">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>

                                <!-- Two-Column Detail Box (Duration & Budget like Image 2) -->
                                <div class="bg-[#F8FAF0] rounded-xl p-3.5 border border-slate-100 grid grid-cols-2 gap-2 text-xs font-sans mt-3">
                                    <div>
                                        <span class="text-slate-400 block text-[10px] uppercase font-bold">Durée estimée</span>
                                        <span class="font-bold text-[#242619]">{{ $opportunity['duration'] }}</span>
                                    </div>
                                    <div>
                                        <span class="text-slate-400 block text-[10px] uppercase font-bold">Rémunération</span>
                                        <span class="font-extrabold text-[#242619]">{{ $opportunity['budget'] }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Card Footer with Recruiter Avatar & Apply Button (Image 2 style) -->
                        <div class="p-6 pt-0 mt-2">
                            <div class="pt-3 border-t border-slate-100 flex items-center justify-between gap-3">
                                <div class="flex items-center gap-2">
                                    <img src="{{ $opportunity['client_avatar'] }}" alt="{{ $opportunity['client_name'] }}" class="w-7 h-7 rounded-full object-cover border border-slate-200">
                                    <span class="text-xs font-semibold text-slate-700 font-sans truncate max-w-[130px]">{{ $opportunity['client_name'] }}</span>
                                </div>

                                <a href="{{ route('talent.application.create') }}" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl text-xs font-bold bg-[#242619] hover:bg-[#A7C123] text-white hover:text-[#242619] transition-all shadow-sm">
                                    <span>Postuler</span>
                                    <span>&rarr;</span>
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </section>


    <!-- =========================================================================
         9. TÉMOIGNAGES & RETOURS D'EXPÉRIENCE (INSPIRÉ DE L'IMAGE 4)
         ========================================================================= -->
    <section id="temoignages" class="py-20 sm:py-24 bg-[#F8FAF0] border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <!-- Section Header (Image 4 style: 007 · TESTIMONIAL / What They're Saying) -->
            <div class="text-center max-w-2xl mx-auto space-y-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#F1F7D7] border border-[#A7C123]/40 text-[#242619] text-xs font-bold uppercase tracking-wider font-display">
                    007 · RETOURS D'EXPÉRIENCE
                </span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-5xl text-[#242619] tracking-tight">
                    Ce qu'ils disent de Talent Club
                </h2>
                <p class="text-sm sm:text-base text-slate-600 font-sans leading-relaxed">
                    Startups, PME et talents d'élite partagent l'impact concret de nos collaborations sur leur trajectoire.
                </p>
            </div>

            <!-- Masonry Grid with Video Cards & Quote Cards (Image 4 style) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 items-start">
                
                <!-- Column 1 -->
                <div class="space-y-6">
                    
                    <!-- Video/Story Feature Card 1 (Image 4 style) -->
                    <div class="bg-[#242619] text-white rounded-3xl p-6 relative overflow-hidden min-h-[340px] flex flex-col justify-between shadow-xl group">
                        <img 
                            src="{{ $testimonials['stories'][0]['image'] }}" 
                            alt="{{ $testimonials['stories'][0]['author'] }}" 
                            class="absolute inset-0 w-full h-full object-cover object-top grayscale contrast-115 opacity-50 group-hover:scale-105 group-hover:opacity-60 transition-all duration-500"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-[#242619] via-[#242619]/60 to-transparent"></div>

                        <!-- Top Play Icon -->
                        <div class="relative z-10 flex justify-start">
                            <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-[#D8F741] font-bold text-sm shadow-md">
                                ▶
                            </div>
                        </div>

                        <!-- Bottom Content -->
                        <div class="relative z-10 space-y-2">
                            <span class="inline-block px-2.5 py-0.5 rounded-full bg-[#D8F741] text-[#242619] font-black text-[10px] uppercase tracking-wider">
                                {{ $testimonials['stories'][0]['company'] }}
                            </span>
                            <h4 class="font-display font-bold text-lg text-white leading-snug">
                                {{ $testimonials['stories'][0]['tagline'] }}
                            </h4>
                            <p class="text-xs text-slate-300 font-sans">
                                {{ $testimonials['stories'][0]['author'] }} · {{ $testimonials['stories'][0]['role'] }}
                            </p>
                        </div>
                    </div>

                    <!-- Quote Card 1 (Daniel Kim) -->
                    <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <img src="{{ $testimonials['quotes'][1]['avatar'] }}" alt="{{ $testimonials['quotes'][1]['name'] }}" class="w-10 h-10 rounded-full object-cover border border-slate-200">
                                <div>
                                    <h5 class="font-display font-bold text-sm text-[#242619]">{{ $testimonials['quotes'][1]['name'] }}</h5>
                                    <span class="text-[11px] text-slate-500 font-sans block">{{ $testimonials['quotes'][1]['role'] }}</span>
                                </div>
                            </div>
                            <span class="text-2xl text-[#A7C123] font-serif font-black">“</span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-sans">
                            « {{ $testimonials['quotes'][1]['quote'] }} »
                        </p>
                    </div>

                    <!-- Quote Card 2 (Alex Johnson) -->
                    <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <img src="{{ $testimonials['quotes'][2]['avatar'] }}" alt="{{ $testimonials['quotes'][2]['name'] }}" class="w-10 h-10 rounded-full object-cover border border-slate-200">
                                <div>
                                    <h5 class="font-display font-bold text-sm text-[#242619]">{{ $testimonials['quotes'][2]['name'] }}</h5>
                                    <span class="text-[11px] text-slate-500 font-sans block">{{ $testimonials['quotes'][2]['role'] }}</span>
                                </div>
                            </div>
                            <span class="text-2xl text-[#A7C123] font-serif font-black">“</span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-sans">
                            « {{ $testimonials['quotes'][2]['quote'] }} »
                        </p>
                    </div>

                </div>

                <!-- Column 2 -->
                <div class="space-y-6">
                    
                    <!-- Quote Card 3 (David Lee) -->
                    <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <img src="{{ $testimonials['quotes'][0]['avatar'] }}" alt="{{ $testimonials['quotes'][0]['name'] }}" class="w-10 h-10 rounded-full object-cover border border-slate-200">
                                <div>
                                    <h5 class="font-display font-bold text-sm text-[#242619]">{{ $testimonials['quotes'][0]['name'] }}</h5>
                                    <span class="text-[11px] text-slate-500 font-sans block">{{ $testimonials['quotes'][0]['role'] }}</span>
                                </div>
                            </div>
                            <span class="text-2xl text-[#A7C123] font-serif font-black">“</span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-sans">
                            « {{ $testimonials['quotes'][0]['quote'] }} »
                        </p>
                    </div>

                    <!-- Quote Card 4 (Sarah Mitchell) -->
                    <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <img src="{{ $testimonials['quotes'][3]['avatar'] }}" alt="{{ $testimonials['quotes'][3]['name'] }}" class="w-10 h-10 rounded-full object-cover border border-slate-200">
                                <div>
                                    <h5 class="font-display font-bold text-sm text-[#242619]">{{ $testimonials['quotes'][3]['name'] }}</h5>
                                    <span class="text-[11px] text-slate-500 font-sans block">{{ $testimonials['quotes'][3]['role'] }}</span>
                                </div>
                            </div>
                            <span class="text-2xl text-[#A7C123] font-serif font-black">“</span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-sans">
                            « {{ $testimonials['quotes'][3]['quote'] }} »
                        </p>
                    </div>

                    <!-- Quote Card 5 (Jonathan Reed) -->
                    <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <img src="{{ $testimonials['quotes'][4]['avatar'] }}" alt="{{ $testimonials['quotes'][4]['name'] }}" class="w-10 h-10 rounded-full object-cover border border-slate-200">
                                <div>
                                    <h5 class="font-display font-bold text-sm text-[#242619]">{{ $testimonials['quotes'][4]['name'] }}</h5>
                                    <span class="text-[11px] text-slate-500 font-sans block">{{ $testimonials['quotes'][4]['role'] }}</span>
                                </div>
                            </div>
                            <span class="text-2xl text-[#A7C123] font-serif font-black">“</span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-sans">
                            « {{ $testimonials['quotes'][4]['quote'] }} »
                        </p>
                    </div>

                </div>

                <!-- Column 3 -->
                <div class="space-y-6">
                    
                    <!-- Quote Card 6 (Michael Tran) -->
                    <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <img src="{{ $testimonials['quotes'][5]['avatar'] }}" alt="{{ $testimonials['quotes'][5]['name'] }}" class="w-10 h-10 rounded-full object-cover border border-slate-200">
                                <div>
                                    <h5 class="font-display font-bold text-sm text-[#242619]">{{ $testimonials['quotes'][5]['name'] }}</h5>
                                    <span class="text-[11px] text-slate-500 font-sans block">{{ $testimonials['quotes'][5]['role'] }}</span>
                                </div>
                            </div>
                            <span class="text-2xl text-[#A7C123] font-serif font-black">“</span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-sans">
                            « {{ $testimonials['quotes'][5]['quote'] }} »
                        </p>
                    </div>

                    <!-- Video/Story Feature Card 2 (Image 4 style) -->
                    <div class="bg-[#242619] text-white rounded-3xl p-6 relative overflow-hidden min-h-[340px] flex flex-col justify-between shadow-xl group">
                        <img 
                            src="{{ $testimonials['stories'][1]['image'] }}" 
                            alt="{{ $testimonials['stories'][1]['author'] }}" 
                            class="absolute inset-0 w-full h-full object-cover object-top grayscale contrast-115 opacity-50 group-hover:scale-105 group-hover:opacity-60 transition-all duration-500"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-[#242619] via-[#242619]/60 to-transparent"></div>

                        <!-- Top Play Icon -->
                        <div class="relative z-10 flex justify-start">
                            <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-[#D8F741] font-bold text-sm shadow-md">
                                ▶
                            </div>
                        </div>

                        <!-- Bottom Content -->
                        <div class="relative z-10 space-y-2">
                            <span class="inline-block px-2.5 py-0.5 rounded-full bg-[#D8F741] text-[#242619] font-black text-[10px] uppercase tracking-wider">
                                {{ $testimonials['stories'][1]['company'] }}
                            </span>
                            <h4 class="font-display font-bold text-lg text-white leading-snug">
                                {{ $testimonials['stories'][1]['tagline'] }}
                            </h4>
                            <p class="text-xs text-slate-300 font-sans">
                                {{ $testimonials['stories'][1]['author'] }} · {{ $testimonials['stories'][1]['role'] }}
                            </p>
                        </div>
                    </div>

                    <!-- Quote Card 7 (Laura Martinez) -->
                    <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <img src="{{ $testimonials['quotes'][6]['avatar'] }}" alt="{{ $testimonials['quotes'][6]['name'] }}" class="w-10 h-10 rounded-full object-cover border border-slate-200">
                                <div>
                                    <h5 class="font-display font-bold text-sm text-[#242619]">{{ $testimonials['quotes'][6]['name'] }}</h5>
                                    <span class="text-[11px] text-slate-500 font-sans block">{{ $testimonials['quotes'][6]['role'] }}</span>
                                </div>
                            </div>
                            <span class="text-2xl text-[#A7C123] font-serif font-black">“</span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-sans">
                            « {{ $testimonials['quotes'][6]['quote'] }} »
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- =========================================================================
         10. CONTACT & HUB PRÉSENTIEL (INSPIRÉ DE L'IMAGE 5)
         ========================================================================= -->
    <section id="contact" class="py-20 sm:py-24 bg-white border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto space-y-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#F1F7D7] border border-[#A7C123]/40 text-[#242619] text-xs font-bold uppercase tracking-wider font-display">
                    CONTACT & ACCOMPAGNEMENT
                </span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-5xl text-[#242619] tracking-tight">
                    Parlons de votre projet
                </h2>
                <p class="text-sm sm:text-base text-slate-600 font-sans leading-relaxed">
                    Une question, un cadrage de recrutement urgent ou un partenariat ? Notre équipe vous répond avec réactivité.
                </p>
            </div>

            <!-- Top 3 Contact Cards (Image 5 style) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Card 1: Téléphone -->
                <div class="bg-[#F8FAF0] rounded-3xl p-8 border border-[#A7C123]/25 shadow-sm space-y-4 text-center sm:text-left flex flex-col justify-between hover:shadow-md transition-all">
                    <div class="space-y-4">
                        <div class="w-14 h-14 rounded-full bg-[#242619] text-[#D8F741] flex items-center justify-center mx-auto sm:mx-0 shadow-md">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <h4 class="font-display font-black text-xl text-[#242619]">
                            +229 01 54 00 00 00
                        </h4>
                        <p class="text-xs text-slate-600 leading-relaxed font-sans">
                            Assistance directe par appel et WhatsApp du lundi au samedi pour orienter votre demande dans l'heure.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-[#A7C123]/20">
                        <a href="tel:+2290154000000" class="text-xs font-bold text-[#242619] hover:text-[#A7C123] inline-flex items-center gap-1 font-display">
                            <span>Appeler ou WhatsApp</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Email (Highlighted Card in #242619 like Image 5 center card) -->
                <div class="bg-[#242619] text-white rounded-3xl p-8 border border-[#242619] shadow-xl space-y-4 text-center sm:text-left flex flex-col justify-between hover:shadow-2xl transition-all">
                    <div class="space-y-4">
                        <div class="w-14 h-14 rounded-full bg-[#D8F741] text-[#242619] flex items-center justify-center mx-auto sm:mx-0 shadow-md font-bold">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h4 class="font-display font-black text-xl text-white">
                            contact@talentclub.bj
                        </h4>
                        <p class="text-xs text-slate-300 leading-relaxed font-sans">
                            Envoyez-nous votre brief ou vos questions. Notre équipe étudie chaque message et vous répond sous 24h ouvrées.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-white/10">
                        <a href="mailto:contact@talentclub.bj" class="text-xs font-bold text-[#D8F741] hover:underline inline-flex items-center gap-1 font-display">
                            <span>Écrire directement</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Card 3: Hub & Localisation -->
                <div class="bg-[#F8FAF0] rounded-3xl p-8 border border-[#A7C123]/25 shadow-sm space-y-4 text-center sm:text-left flex flex-col justify-between hover:shadow-md transition-all">
                    <div class="space-y-4">
                        <div class="w-14 h-14 rounded-full bg-[#242619] text-[#D8F741] flex items-center justify-center mx-auto sm:mx-0 shadow-md">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h4 class="font-display font-black text-xl text-[#242619]">
                            Cotonou & Calavi, Bénin
                        </h4>
                        <p class="text-xs text-slate-600 leading-relaxed font-sans">
                            Présence physique au cœur des pôles d'innovation béninois. Rencontrez-nous lors des ateliers et sessions de co-working.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-[#A7C123]/20">
                        <span class="text-xs font-bold text-[#242619] font-display">
                            République du Bénin 🇧🇯
                        </span>
                    </div>
                </div>

            </div>

            <!-- Middle Layout: Working Time & Location (Left) + Contact Form (Right) (Image 5 style) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <!-- Left: Working Time & Location Preview (Image 5 style) -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="space-y-3">
                        <h3 class="font-display font-extrabold text-2xl text-[#242619]">
                            Horaires de Permanence
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-sans">
                            Nous assurons une permanence réactive pour accompagner entreprises et freelances à chaque étape de leur mission.
                        </p>
                    </div>

                    <div class="space-y-2.5 text-xs sm:text-sm font-sans">
                        <div class="flex items-center gap-3 p-3 rounded-xl bg-[#F8FAF0] border border-slate-200/80">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#A7C123]"></span>
                            <span class="font-bold text-[#242619]">Lundi - Vendredi :</span>
                            <span class="text-slate-600 ml-auto font-sans">08h30 - 18h30</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 rounded-xl bg-[#F8FAF0] border border-slate-200/80">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#D8F741]"></span>
                            <span class="font-bold text-[#242619]">Samedi :</span>
                            <span class="text-slate-600 ml-auto font-sans">09h00 - 14h00</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-200/80 text-slate-500">
                            <span class="w-2.5 h-2.5 rounded-full bg-slate-400"></span>
                            <span>Dimanche :</span>
                            <span class="ml-auto font-medium font-sans">Permanence email & urgence</span>
                        </div>
                    </div>

                    <!-- Real Interactive Map Card -->
                    <div class="bg-[#F8FAF0] rounded-3xl p-5 sm:p-6 border border-slate-200/90 shadow-sm space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-[#A7C123] animate-pulse"></span>
                                <h4 class="font-display font-bold text-sm text-[#242619]">Localisation du Hub Bénin</h4>
                            </div>
                            <span class="text-[10px] font-bold text-[#A7C123] bg-white px-2.5 py-1 rounded-full border border-[#A7C123]/30 uppercase tracking-wider">Cotonou Littoral</span>
                        </div>

                        <!-- Interactive Leaflet Map Container -->
                        <div class="relative w-full h-64 sm:h-72 rounded-2xl overflow-hidden border border-slate-300/80 shadow-inner z-0">
                            <div id="hub-interactive-map" class="w-full h-full"></div>
                            
                            <!-- Floating Hub Badge Overlay -->
                            <div class="absolute top-3 left-3 z-[400] pointer-events-none">
                                <div class="px-3 py-1.5 rounded-xl bg-[#242619]/90 backdrop-blur-md text-white text-[11px] font-display font-bold shadow-lg border border-white/20 flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#D8F741]"></span>
                                    <span>Hub National · Haie Vive</span>
                                </div>
                            </div>

                            <!-- Bottom Quick Action GPS Link -->
                            <div class="absolute bottom-3 right-3 z-[400]">
                                <a 
                                    href="https://www.google.com/maps/search/?api=1&query=6.3533,2.4085" 
                                    target="_blank" 
                                    rel="noopener noreferrer"
                                    class="px-3 py-1.5 rounded-xl bg-white/95 hover:bg-[#D8F741] text-[#242619] text-[11px] font-bold shadow-md border border-slate-200 flex items-center gap-1.5 transition-colors cursor-pointer"
                                >
                                    <svg class="w-3.5 h-3.5 text-[#242619]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                    <span>Ouvrir GPS</span>
                                </a>
                            </div>
                        </div>

                        <!-- Card Footnote / Address -->
                        <div class="flex items-center justify-between text-[11px] text-slate-500 pt-1">
                            <div class="flex items-center gap-1.5 font-medium">
                                <svg class="w-3.5 h-3.5 text-[#A7C123]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Avenue Jean-Paul II, Cotonou, Bénin</span>
                            </div>
                            <span class="font-mono text-[10px] text-slate-400">6.3533° N, 2.4085° E</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Get In Touch Contact Form (Image 5 style) -->
                <div class="lg:col-span-7 bg-[#F8FAF0] rounded-[36px] p-8 sm:p-12 border border-[#A7C123]/30 shadow-lg space-y-6">
                    
                    <div>
                        <span class="px-3.5 py-1.5 rounded-full bg-white text-[#242619] border border-[#A7C123]/30 text-xs font-bold tracking-wider font-display">
                            Formulaire de contact
                        </span>
                        <h3 class="font-display font-black text-2xl sm:text-3xl text-[#242619] tracking-tight mt-3">
                            Contactez-nous !
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1 font-sans">
                            Remplissez ce formulaire et notre équipe prendra attache avec vous dans les plus brefs délais.
                        </p>
                    </div>

                    @if(session('contact_success'))
                        <div class="p-4 rounded-2xl bg-[#D8F741]/20 border border-[#A7C123] text-[#242619] text-xs sm:text-sm font-semibold flex items-center gap-3">
                            <span class="text-xl">✅</span>
                            <span>{{ session('contact_success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4 font-sans">
                        @csrf
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="contact_name" class="block text-xs font-bold text-[#242619] mb-1.5 font-display">
                                    Votre Nom Complet <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="contact_name" 
                                    name="name" 
                                    required 
                                    placeholder="Ex: Jean-Baptiste Dossou"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-xs sm:text-sm text-[#242619] focus:border-[#A7C123] focus:ring-2 focus:ring-[#A7C123]/20 outline-none transition-all"
                                >
                            </div>

                            <div>
                                <label for="contact_email" class="block text-xs font-bold text-[#242619] mb-1.5 font-display">
                                    Votre Adresse Email <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="email" 
                                    id="contact_email" 
                                    name="email" 
                                    required 
                                    placeholder="nom@entreprise.com"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-xs sm:text-sm text-[#242619] focus:border-[#A7C123] focus:ring-2 focus:ring-[#A7C123]/20 outline-none transition-all"
                                >
                            </div>
                        </div>

                        <div>
                            <label for="contact_role" class="block text-xs font-bold text-[#242619] mb-1.5 font-display">
                                Vous êtes :
                            </label>
                            <select 
                                id="contact_role" 
                                name="role" 
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-xs sm:text-sm text-[#242619] focus:border-[#A7C123] focus:ring-2 focus:ring-[#A7C123]/20 outline-none transition-all"
                            >
                                <option value="Entreprise / Recruteur">Une Entreprise ou Recruteur (Besoin de talents)</option>
                                <option value="Jeune Talent">Un Jeune Talent (Candidature / Inscription)</option>
                                <option value="Partenaire / Média">Un Partenaire Institutionnel / Média</option>
                                <option value="Autre demande">Autre demande</option>
                            </select>
                        </div>

                        <div>
                            <label for="contact_message" class="block text-xs font-bold text-[#242619] mb-1.5 font-display">
                                Votre Message ou Besoin <span class="text-red-500">*</span>
                            </label>
                            <textarea 
                                id="contact_message" 
                                name="message" 
                                rows="4" 
                                required 
                                placeholder="Détaillez votre projet, vos attentes ou vos questions..."
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-xs sm:text-sm text-[#242619] focus:border-[#A7C123] focus:ring-2 focus:ring-[#A7C123]/20 outline-none transition-all resize-y"
                            ></textarea>
                        </div>

                        <div class="pt-2">
                            <button 
                                type="submit" 
                                class="w-full sm:w-auto px-8 py-4 rounded-full bg-[#A7C123] hover:bg-[#D8F741] text-[#242619] font-display font-bold text-sm shadow-md hover:shadow-lg transition-all cursor-pointer flex items-center justify-center gap-2"
                            >
                                <span>Envoyer mon message</span>
                                <span>&rarr;</span>
                            </button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section>

    <!-- Hub Interactive Map Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof L !== 'undefined' && document.getElementById('hub-interactive-map')) {
                // Coordinates: Cotonou, Littoral, Bénin (Haie Vive / Bd de la Marina)
                const hubCoords = [6.3533, 2.4085];
                const map = L.map('hub-interactive-map', {
                    center: hubCoords,
                    zoom: 14,
                    scrollWheelZoom: false,
                    zoomControl: true
                });

                // High quality, fast tile layer
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright" target="_blank">OpenStreetMap</a>',
                    maxZoom: 19
                }).addTo(map);

                // Custom glowing pin marker with TC branding
                const customIcon = L.divIcon({
                    className: 'tc-custom-pin',
                    html: `
                        <div style="position: relative; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                            <span style="position: absolute; width: 100%; height: 100%; border-radius: 50%; background: rgba(216, 247, 65, 0.45); animation: ping 1.5s cubic-bezier(0, 0, 0.2, 1) infinite;"></span>
                            <div style="position: relative; width: 34px; height: 34px; border-radius: 50%; background: #242619; border: 3px solid #D8F741; color: #D8F741; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 11px; box-shadow: 0 4px 16px rgba(0,0,0,0.4);">
                                TC
                            </div>
                        </div>
                    `,
                    iconSize: [40, 40],
                    iconAnchor: [20, 20],
                    popupAnchor: [0, -22]
                });

                const marker = L.marker(hubCoords, { icon: customIcon }).addTo(map);

                marker.bindPopup(`
                    <div style="font-family: 'Montserrat', sans-serif; text-align: center; padding: 4px; min-width: 170px;">
                        <div style="font-weight: 800; font-size: 13px; color: #242619; margin-bottom: 2px;">TALENT CLUB HUB</div>
                        <div style="font-size: 11px; color: #64748b; margin-bottom: 8px;">Haie Vive · Cotonou, Bénin 🇧🇯</div>
                        <a href="https://www.google.com/maps/search/?api=1&query=6.3533,2.4085" target="_blank" rel="noopener noreferrer" style="display: inline-block; background: #242619; color: #D8F741; font-weight: 700; font-size: 11px; padding: 5px 12px; border-radius: 9999px; text-decoration: none;">
                            Itinéraire GPS &rarr;
                        </a>
                    </div>
                `);

                // Auto open after a small delay
                setTimeout(() => {
                    marker.openPopup();
                }, 600);
            }
        });
    </script>
</x-app-layout>
