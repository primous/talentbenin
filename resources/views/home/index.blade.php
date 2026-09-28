<x-app-layout>

    <!-- =========================================================================
         1. HERO SECTION
         ========================================================================= -->
    <section id="accueil" class="relative overflow-hidden pt-12 pb-20 lg:pt-20 lg:pb-28 border-b border-slate-200/80 hero-gradient subtle-grid">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <!-- Left Column: Copy & Actions -->
                <div class="lg:col-span-7 space-y-8 text-center lg:text-left">
                    <!-- Subtle badge -->
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-50 border border-emerald-200/70 text-emerald-800 text-xs font-semibold shadow-xs">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>Plateforme Officielle des Talents du Bénin</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="font-display font-extrabold text-4xl sm:text-5xl lg:text-6xl tracking-tight text-slate-950 leading-[1.12]">
                        Les talents béninois sont là. <br class="hidden sm:inline">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 via-emerald-600 to-teal-700">
                            Faisons-les découvrir.
                        </span>
                    </h1>

                    <!-- Supporting Message -->
                    <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-normal">
                        Talent Club réunit les jeunes talents béninois, valorise leurs compétences et crée des connexions directes avec des entreprises, des porteurs de projets et de nouvelles opportunités.
                    </p>

                    <!-- Ecosystem Chain Indicator -->
                    <div class="hidden sm:flex items-center justify-center lg:justify-start gap-2 text-xs font-bold uppercase tracking-wider text-slate-600 py-1">
                        <span class="px-2.5 py-1 bg-white rounded-md border border-slate-200 text-slate-800 shadow-2xs">Talents</span>
                        <span class="text-brand-500">&rarr;</span>
                        <span class="px-2.5 py-1 bg-white rounded-md border border-slate-200 text-slate-800 shadow-2xs">Compétences</span>
                        <span class="text-brand-500">&rarr;</span>
                        <span class="px-2.5 py-1 bg-white rounded-md border border-slate-200 text-slate-800 shadow-2xs">Opportunités</span>
                        <span class="text-brand-500">&rarr;</span>
                        <span class="px-2.5 py-1 bg-white rounded-md border border-slate-200 text-slate-800 shadow-2xs">Connexions</span>
                    </div>

                    <!-- Hero CTAs -->
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3.5 pt-2">
                        <a href="#talents" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-6 py-3.5 rounded-xl bg-brand-dark hover:bg-slate-800 text-white text-sm font-semibold shadow-md hover:shadow-lg transition-all duration-200">
                            <span>Découvrir les talents</span>
                            <svg class="w-4 h-4 text-brand-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <a href="{{ route('talent.application.create') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-white hover:bg-slate-50 text-slate-800 text-sm font-semibold border border-slate-300 shadow-xs hover:border-slate-400 transition-all duration-200">
                            <span>Rejoindre Talent Club</span>
                        </a>
                    </div>

                    <!-- Trust indicators avatars -->
                    <div class="pt-4 flex items-center justify-center lg:justify-start gap-4 text-xs text-slate-600">
                        <div class="flex -space-x-2 overflow-hidden">
                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white object-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&h=120&q=80" alt="Avatar">
                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white object-cover" src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=120&h=120&q=80" alt="Avatar">
                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white object-cover" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=120&h=120&q=80" alt="Avatar">
                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white object-cover" src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?auto=format&fit=crop&w=120&h=120&q=80" alt="Avatar">
                        </div>
                        <div>
                            <span class="font-bold text-slate-900">+500 talents certifiés</span> à Cotonou et partout au Bénin
                        </div>
                    </div>
                </div>

                <!-- Right Column: Visual Showcase Collage -->
                <div class="lg:col-span-5 relative">
                    <!-- Decorative back glow -->
                    <div class="absolute -top-12 -right-12 w-80 h-80 bg-brand-500/10 rounded-full blur-3xl pointer-events-none"></div>

                    <!-- Main Ecosystem Card -->
                    <div class="bg-white rounded-3xl p-6 shadow-2xl border border-slate-200/90 relative z-10 space-y-5">
                        
                        <!-- Top header of mockup -->
                        <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                            <div class="flex items-center gap-2.5">
                                <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                                <span class="text-xs font-bold uppercase tracking-wider text-slate-800">Écosystème En Direct</span>
                            </div>
                            <span class="text-[11px] font-semibold text-brand-600 bg-brand-50 px-2.5 py-1 rounded-full border border-brand-100">
                                Bénin Digital 2026
                            </span>
                        </div>

                        <!-- Highlight Talent Profile Preview -->
                        <div class="p-4 rounded-2xl bg-gradient-to-br from-slate-50 to-white border border-slate-200/80 flex items-center gap-4 hover:border-brand-500/50 transition-colors">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=200&h=200&q=80" alt="Amina S." class="w-14 h-14 rounded-2xl object-cover ring-2 ring-brand-500/30 shadow-sm">
                            <div class="min-w-0 flex-1">
                                <div class="flex items-center gap-1.5">
                                    <h4 class="font-bold text-slate-900 text-sm truncate">Amina S.</h4>
                                    <span class="text-emerald-600">✓</span>
                                </div>
                                <p class="text-xs text-brand-600 font-semibold truncate">Développeuse Fullstack Laravel</p>
                                <p class="text-[11px] text-slate-600 flex items-center gap-1 mt-0.5">
                                    <span>📍 Abomey-Calavi</span> · <span class="text-emerald-600 font-medium">Disponible</span>
                                </p>
                            </div>
                            <div class="text-right shrink-0">
                                <span class="text-[10px] text-slate-600 block">Note client</span>
                                <span class="text-xs font-extrabold text-amber-500">★ 5.0 (34)</span>
                            </div>
                        </div>

                        <!-- Mini Floating Stats within Card -->
                        <div class="grid grid-cols-2 gap-3">
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/60">
                                <span class="text-[10px] font-semibold text-slate-600 uppercase block">Dernier Service Validé</span>
                                <p class="text-xs font-bold text-slate-900 mt-0.5 truncate">Identité de Marque 360°</p>
                                <span class="text-[11px] text-brand-600 font-extrabold">45 000 FCFA</span>
                            </div>
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/60">
                                <span class="text-[10px] font-semibold text-slate-600 uppercase block">Délai Réponse Moyen</span>
                                <p class="text-xs font-bold text-slate-900 mt-0.5">&lt; 2 heures</p>
                                <span class="text-[11px] text-emerald-600 font-semibold">Haute réactivité</span>
                            </div>
                        </div>

                        <!-- Talent Chips Collage -->
                        <div class="space-y-2 pt-2">
                            <span class="text-[11px] font-bold text-slate-600 uppercase tracking-wider block">Compétences très recherchées</span>
                            <div class="flex flex-wrap gap-1.5">
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-emerald-50 text-emerald-700 border border-emerald-200/60">UI/UX Design</span>
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-slate-100 text-slate-700">Laravel / API</span>
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-slate-100 text-slate-700">Montage Reels</span>
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-slate-100 text-slate-700">Meta Ads</span>
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-slate-100 text-slate-700">Copywriting</span>
                            </div>
                        </div>

                        <!-- Bottom Security Guarantee -->
                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-600">
                            <span class="flex items-center gap-1 font-medium">
                                <svg class="w-3.5 h-3.5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Profils authentifiés et évalués
                            </span>
                            <span class="font-semibold text-slate-700">Cotonou & Diaspora</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- =========================================================================
         2. TRUST / SOCIAL PROOF METRICS
         ========================================================================= -->
    <section class="bg-white border-b border-slate-200/80 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 divide-y sm:divide-y-0 sm:divide-x divide-slate-100">
                @foreach($stats as $stat)
                    <div class="pt-4 sm:pt-0 sm:px-6 text-center sm:text-left">
                        <div class="font-display font-black text-3xl sm:text-4xl text-slate-950 tracking-tight">
                            {{ $stat['value'] }}
                        </div>
                        <div class="text-xs font-bold uppercase tracking-wider text-brand-600 mt-1">
                            {{ $stat['label'] }}
                        </div>
                        <div class="text-xs text-slate-600 mt-0.5">
                            {{ $stat['detail'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- =========================================================================
         3. SEARCH & DISCOVERY BAR ("Trouvez la compétence dont vous avez besoin")
         ========================================================================= -->
    <section id="recherche" class="py-16 bg-[#FAFAFA] border-b border-slate-200/80">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-100 text-slate-700 text-xs font-semibold">
                <span>Explorer l'Annuaire</span>
            </div>

            <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-950 tracking-tight">
                Vous cherchez une compétence. <br class="hidden sm:inline">
                <span class="text-brand-600">Nous vous aidons à trouver le talent.</span>
            </h2>

            <p class="text-sm sm:text-base text-slate-600 max-w-2xl mx-auto">
                Accédez directement aux compétences pointues disponibles au Bénin pour concrétiser vos projets dans les meilleurs délais.
            </p>

            <!-- Search Form Card with Interactive Filter Preview -->
            <div class="bg-white p-3 sm:p-4 rounded-2xl shadow-lg border border-slate-200/90 text-left max-w-3xl mx-auto">
                <div class="flex flex-col sm:flex-row items-center gap-3">
                    <div class="relative flex-1 w-full">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="text" placeholder="Ex: Création de logo, Développeur Laravel, Montage vidéo, Meta Ads..." class="w-full pl-11 pr-4 py-3 rounded-xl text-sm border border-slate-200 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 text-slate-900 placeholder-slate-400 bg-slate-50/50">
                    </div>
                    
                    <a href="#talents" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold shadow-sm transition-colors shrink-0">
                        <span>Rechercher un talent</span>
                    </a>
                </div>

                <!-- Fast Suggestion Pills -->
                <div class="flex flex-wrap items-center gap-2 pt-3 mt-3 border-t border-slate-100 text-xs text-slate-600">
                    <span class="font-semibold text-slate-700">Recherches fréquentes :</span>
                    <a href="#talents" class="px-2.5 py-1 rounded-lg bg-slate-100 hover:bg-brand-50 hover:text-brand-700 transition-colors">Logo & Branding</a>
                    <a href="#talents" class="px-2.5 py-1 rounded-lg bg-slate-100 hover:bg-brand-50 hover:text-brand-700 transition-colors">Site Web Laravel</a>
                    <a href="#talents" class="px-2.5 py-1 rounded-lg bg-slate-100 hover:bg-brand-50 hover:text-brand-700 transition-colors">Vidéos TikTok/Reels</a>
                    <a href="#talents" class="px-2.5 py-1 rounded-lg bg-slate-100 hover:bg-brand-50 hover:text-brand-700 transition-colors">Copywriting</a>
                    <a href="#talents" class="px-2.5 py-1 rounded-lg bg-slate-100 hover:bg-brand-50 hover:text-brand-700 transition-colors">UI/UX Figma</a>
                </div>
            </div>
        </div>
    </section>


    <!-- =========================================================================
         4. CATEGORIES SECTION (10 DOMAINS)
         ========================================================================= -->
    <section id="categories" class="py-20 bg-white border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-600">Expertises & Domaines</span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-950 tracking-tight mt-1">
                        Explorez par catégorie de compétences
                    </h2>
                </div>
                <p class="text-sm text-slate-600 max-w-md">
                    Des compétences réparties par filières d'excellence pour faciliter vos recrutements et commandes de prestations.
                </p>
            </div>

            <!-- Categories Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
                @foreach($categories as $category)
                    <x-category-card :category="$category" />
                @endforeach
            </div>
        </div>
    </section>


    <!-- =========================================================================
         5. TALENTS À DÉCOUVRIR (SHOWCASE DE TALENTS RÉELS)
         ========================================================================= -->
    <section id="talents" class="py-20 bg-[#F9FAFB] border-b border-slate-200/80" x-data="{ activeCategory: 'all' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-600">Sélection Vetted</span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-950 tracking-tight mt-1">
                        Découvrez les talents béninois
                    </h2>
                    <p class="text-sm text-slate-600 mt-2 max-w-2xl">
                        Des compétences réelles. Des projets concrets. Des talents prêts à créer de la valeur pour votre organisation.
                    </p>
                </div>

                <!-- Filter indicator badges -->
                <div class="flex items-center gap-2 overflow-x-auto pb-2 sm:pb-0">
                    <button
                        type="button"
                        @click="activeCategory = 'all'"
                        :class="activeCategory === 'all' ? 'bg-brand-dark text-white shadow-xs' : 'bg-white text-slate-600 border border-slate-200 hover:border-slate-300 hover:text-slate-900'"
                        class="px-3.5 py-1.5 rounded-lg text-xs font-bold transition-all cursor-pointer">
                        Tous les talents
                    </button>
                    <button
                        type="button"
                        @click="activeCategory = 'tech'"
                        :class="activeCategory === 'tech' ? 'bg-brand-dark text-white shadow-xs' : 'bg-white text-slate-600 border border-slate-200 hover:border-slate-300 hover:text-slate-900'"
                        class="px-3.5 py-1.5 rounded-lg text-xs font-semibold transition-all cursor-pointer">
                        Tech & Web
                    </button>
                    <button
                        type="button"
                        @click="activeCategory = 'design'"
                        :class="activeCategory === 'design' ? 'bg-brand-dark text-white shadow-xs' : 'bg-white text-slate-600 border border-slate-200 hover:border-slate-300 hover:text-slate-900'"
                        class="px-3.5 py-1.5 rounded-lg text-xs font-semibold transition-all cursor-pointer">
                        Design & Branding
                    </button>
                    <button
                        type="button"
                        @click="activeCategory = 'media'"
                        :class="activeCategory === 'media' ? 'bg-brand-dark text-white shadow-xs' : 'bg-white text-slate-600 border border-slate-200 hover:border-slate-300 hover:text-slate-900'"
                        class="px-3.5 py-1.5 rounded-lg text-xs font-semibold transition-all cursor-pointer">
                        Média & Vidéo
                    </button>
                </div>
            </div>

            <!-- Talents Cards Grid -->
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
            <div class="mt-12 p-6 rounded-2xl bg-white border border-slate-200/80 flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-brand-50 text-brand-600 flex items-center justify-center font-bold text-lg">
                        ✨
                    </div>
                    <div>
                        <h4 class="font-bold text-sm text-slate-900">Vous avez un profil d'exception au Bénin ?</h4>
                        <p class="text-xs text-slate-600">Rejoignez la communauté et recevez des propositions de missions qualifiées.</p>
                    </div>
                </div>
                <a href="{{ route('talent.application.create') }}" class="px-5 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-xs font-semibold transition-colors shrink-0">
                    Créer mon profil talent
                </a>
            </div>
        </div>
    </section>


    <!-- =========================================================================
         6. THE TALENT CATALOG ("Votre besoin. Le bon talent.")
         ========================================================================= -->
    <section id="services" class="py-20 bg-white border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-brand-600">Le Catalogue des Services</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-950 tracking-tight mt-1">
                    « Votre besoin. Le bon talent. »
                </h2>
                <p class="text-sm text-slate-600 mt-2 leading-relaxed">
                    Talent Club fonctionne comme un catalogue d'expertises clair et transparent : vous parcourez les prestations packagées, découvrez le talent adapté, consultez les tarifs en FCFA et passez commande en toute confiance.
                </p>
            </div>

            <!-- Service Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($serviceCatalog as $service)
                    <x-service-card :service="$service" />
                @endforeach
            </div>

            <!-- Catalog CTA -->
            <div class="mt-12 text-center">
                <a href="#recherche" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-900 text-sm font-semibold transition-colors">
                    <span>Explorer l'ensemble des 120+ services au catalogue</span>
                    <svg class="w-4 h-4 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>


    <!-- =========================================================================
         7. HOW IT WORKS (COMMENT ÇA MARCHE EN 3 ÉTAPES)
         ========================================================================= -->
    <section id="comment-ca-marche" class="py-20 bg-[#F9FAFB] border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-wider text-brand-600">Processus Simplifié</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-950 tracking-tight">
                    Comment fonctionne Talent Club ?
                </h2>
                <p class="text-sm text-slate-600">
                    Une mise en relation fluide, directe et sécurisée entre porteurs de projets et compétences locales.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                <!-- Step 1 -->
                <div class="bg-white rounded-2xl p-8 border border-slate-200/90 shadow-sm relative space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-brand-50 border border-brand-200 text-brand-700 font-display font-black text-xl flex items-center justify-center">
                        01
                    </div>
                    <h3 class="font-display font-bold text-xl text-slate-900">
                        Exprimez votre besoin
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Recherchez une compétence spécifique ou choisissez directement un service au catalogue avec des spécifications et délais clairs.
                    </p>
                    <div class="text-[11px] font-semibold text-brand-600 pt-2">
                        Précis & sans perte de temps
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="bg-white rounded-2xl p-8 border border-slate-200/90 shadow-sm relative space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-brand-dark text-white font-display font-black text-xl flex items-center justify-center">
                        02
                    </div>
                    <h3 class="font-display font-bold text-xl text-slate-900">
                        Découvrez le bon talent
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Consultez le portfolio, les réalisations concrètes, les avis certifiés et les tarifs du talent béninois sélectionné.
                    </p>
                    <div class="text-[11px] font-semibold text-brand-600 pt-2">
                        Profils rigoureusement audités
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="bg-white rounded-2xl p-8 border border-slate-200/90 shadow-sm relative space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500 text-white font-display font-black text-xl flex items-center justify-center">
                        03
                    </div>
                    <h3 class="font-display font-bold text-xl text-slate-900">
                        Entrez en contact direct
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Le talent reçoit instantanément une notification, échange avec vous, ajuste les détails et démarre la mission sans intermédiaire superflu.
                    </p>
                    <div class="text-[11px] font-semibold text-brand-600 pt-2">
                        Connexion directe & sécurisée
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- =========================================================================
         8. DUAL AUDIENCE: POUR LES ENTREPRISES & POUR LES TALENTS
         ========================================================================= -->
    <section class="py-20 bg-white border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <!-- Block 1: For Companies -->
            <div id="entreprises" class="bg-gradient-to-br from-slate-900 to-brand-dark rounded-3xl p-8 sm:p-12 lg:p-16 text-white shadow-xl grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 space-y-5">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-800 text-brand-400 text-xs font-bold uppercase tracking-wider border border-slate-700">
                        Pour les Entreprises & PME
                    </span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl tracking-tight leading-tight">
                        « Vous avez un projet. <br>
                        <span class="text-brand-400">Nous avons les talents. »</span>
                    </h2>
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-xl">
                        Les entreprises, startups, PME et institutions au Bénin peuvent mobiliser en quelques clics les compétences nécessaires à leur croissance, sans processus de recrutement fastidieux.
                    </p>
                    <ul class="space-y-2.5 text-xs sm:text-sm text-slate-200 pt-2">
                        <li class="flex items-center gap-2">
                            <span class="text-brand-400 font-bold">✓</span>
                            <span>Talents vérifiés pour leur rigueur, réactivité et professionnalisme</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-brand-400 font-bold">✓</span>
                            <span>Facturation claire en FCFA et respect strict des délais convenus</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-brand-400 font-bold">✓</span>
                            <span>Accompagnement personnalisé pour les missions d'envergure</span>
                        </li>
                    </ul>
                    <div class="pt-4">
                        <a href="#recherche" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-brand-500 hover:bg-brand-400 text-brand-dark font-bold text-sm transition-colors shadow-sm">
                            <span>Trouver un talent pour mon entreprise</span>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right visual graphic -->
                <div class="lg:col-span-5 bg-slate-800/80 rounded-2xl p-6 border border-slate-700 space-y-4">
                    <span class="text-xs font-bold text-brand-400 uppercase tracking-wider block">Garantie Talent Club Business</span>
                    <div class="space-y-3">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-500/20 text-brand-400 flex items-center justify-center shrink-0 text-sm font-bold">01</div>
                            <div>
                                <h4 class="text-xs font-bold text-white">Disponibilité garantie</h4>
                                <p class="text-[11px] text-slate-400">Des professionnels opérationnels immédiatement pour vos projets.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-500/20 text-brand-400 flex items-center justify-center shrink-0 text-sm font-bold">02</div>
                            <div>
                                <h4 class="text-xs font-bold text-white">Contrats conformes</h4>
                                <p class="text-[11px] text-slate-400">Modalités de collaboration sécurisées pour votre sérénité.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-500/20 text-brand-400 flex items-center justify-center shrink-0 text-sm font-bold">03</div>
                            <div>
                                <h4 class="text-xs font-bold text-white">Impact local fort</h4>
                                <p class="text-[11px] text-slate-400">Contribuez directement au dynamisme de la jeunesse béninoise.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Block 2: For Talents -->
            <div id="rejoindre" class="bg-gradient-to-br from-emerald-50 via-teal-50/50 to-white rounded-3xl p-8 sm:p-12 lg:p-16 border border-emerald-200/80 shadow-md grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 space-y-5">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold uppercase tracking-wider">
                        Pour les Jeunes Talents
                    </span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl tracking-tight leading-tight text-slate-950">
                        « Votre compétence mérite <br>
                        <span class="text-brand-600">d'être vue et valorisée. »</span>
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-xl">
                        Que vous soyez développeur, designer, monteur vidéo, rédacteur ou marketeur, Talent Club vous offre la vitrine crédible et professionnelle qu'il vous manquait pour décoller.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-slate-700 pt-2">
                        <div class="flex items-center gap-2">
                            <span class="text-brand-600 font-bold">✦</span>
                            <span>Montrer vos réalisations concrètes</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-brand-600 font-bold">✦</span>
                            <span>Proposer vos services packagés</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-brand-600 font-bold">✦</span>
                            <span>Recevoir des demandes qualifiées</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-brand-600 font-bold">✦</span>
                            <span>Collaborer avec d'autres talents</span>
                        </div>
                    </div>
                    <div class="pt-4">
                        <a href="{{ route('talent.application.create') }}" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-brand-dark hover:bg-slate-800 text-white font-semibold text-sm transition-colors shadow-sm">
                            <span>Postuler et rejoindre Talent Club</span>
                            <svg class="w-4 h-4 text-brand-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 bg-white rounded-2xl p-6 border border-emerald-100 shadow-sm space-y-4">
                    <span class="text-xs font-bold text-emerald-800 uppercase tracking-wider block">Critères de sélection</span>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Talent Club n'est pas un annuaire fourre-tout. Nous privilégions la compétence démontrée, la ponctualité et le sens du service.
                    </p>
                    <div class="space-y-2 text-xs text-slate-700">
                        <div class="p-2.5 rounded-lg bg-slate-50 flex items-center justify-between">
                            <span>Portfolio / Exemples réels</span>
                            <span class="font-bold text-emerald-600">Requis</span>
                        </div>
                        <div class="p-2.5 rounded-lg bg-slate-50 flex items-center justify-between">
                            <span>Résidence Bénin ou Diaspora</span>
                            <span class="font-bold text-emerald-600">Requis</span>
                        </div>
                        <div class="p-2.5 rounded-lg bg-slate-50 flex items-center justify-between">
                            <span>Entretien d'admission rapide</span>
                            <span class="font-bold text-emerald-600">15 min</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- =========================================================================
         9. COMMUNITY & PHILOSOPHY (EDITORIAL SECTION)
         ========================================================================= -->
    <section id="philosophie" class="py-24 bg-brand-dark text-white border-b border-slate-800 relative overflow-hidden">
        <!-- Subtle background pattern -->
        <div class="absolute inset-0 bg-[radial-gradient(#1e293b_1px,transparent_1px)] [background-size:24px_24px] opacity-30 pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 space-y-8">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-800/80 text-brand-400 text-xs font-bold uppercase tracking-wider border border-slate-700">
                La Philosophie Talent Club
            </span>

            <blockquote class="font-display font-bold text-2xl sm:text-3xl lg:text-4xl text-slate-100 leading-snug">
                « Il est bien de gagner seul. <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 via-emerald-300 to-teal-200">
                    Il est encore plus intéressant de construire un système dans lequel nous pouvons progresser, collaborer et gagner ensemble.
                </span> »
            </blockquote>

            <div class="w-16 h-1 bg-brand-500 mx-auto rounded-full"></div>

            <p class="text-sm sm:text-base text-slate-400 max-w-2xl mx-auto leading-relaxed">
                Talent Club dépasse le simple cadre d'une plateforme de mise en relation. C'est le réseau professionnel où la jeunesse béninoise échange ses connaissances, forme des synergies interdisciplinaires et bâtit des projets d'envergure internationale.
            </p>

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 pt-6 text-left">
                <div class="p-4 rounded-xl bg-slate-800/50 border border-slate-700/60">
                    <span class="text-brand-400 font-bold text-sm block">01 · Partage</span>
                    <p class="text-xs text-slate-400 mt-1">Échange continu de savoirs et retours d'expérience.</p>
                </div>
                <div class="p-4 rounded-xl bg-slate-800/50 border border-slate-700/60">
                    <span class="text-brand-400 font-bold text-sm block">02 · Synergie</span>
                    <p class="text-xs text-slate-400 mt-1">Développeurs & designers associés sur les mêmes missions.</p>
                </div>
                <div class="p-4 rounded-xl bg-slate-800/50 border border-slate-700/60">
                    <span class="text-brand-400 font-bold text-sm block">03 · Exigence</span>
                    <p class="text-xs text-slate-400 mt-1">Culture de la ponctualité et des standards mondiaux.</p>
                </div>
                <div class="p-4 rounded-xl bg-slate-800/50 border border-slate-700/60">
                    <span class="text-brand-400 font-bold text-sm block">04 · Progrès</span>
                    <p class="text-xs text-slate-400 mt-1">Montée en compétences collective et reconnaissance.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- =========================================================================
         10. OPPORTUNITIES ECOSYSTEM ("Les compétences créent des opportunités")
         ========================================================================= -->
    <section id="opportunites" class="py-20 bg-white border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-600">Offres & Missions Récentes</span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-950 tracking-tight mt-1">
                        « Les compétences créent des opportunités. »
                    </h2>
                    <p class="text-sm text-slate-600 mt-2 max-w-xl">
                        Missions freelance, contrats de partenariat, stages et recrutements dédiés aux membres de la communauté.
                    </p>
                </div>

                <a href="{{ url('/#entreprises') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-600 hover:text-brand-700">
                    <span>Publier une opportunité pour l'écosystème</span>
                    <span>&rarr;</span>
                </a>
            </div>

            <!-- Opportunities Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($opportunities as $opportunity)
                    <div class="bg-[#FAFAFA] rounded-2xl p-6 border border-slate-200/90 hover:border-brand-500/80 transition-all duration-200 hover:shadow-md flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-3">
                                <span class="text-[10px] font-bold uppercase px-2.5 py-0.5 rounded-full bg-slate-200 text-slate-800">
                                    {{ $opportunity['type'] }}
                                </span>
                                <span class="text-xs font-semibold text-slate-600">
                                    ⏱ {{ $opportunity['duration'] }}
                                </span>
                            </div>

                            <h4 class="font-display font-bold text-base text-slate-900 mb-1">
                                {{ $opportunity['title'] }}
                            </h4>

                            <p class="text-xs text-slate-600 mb-4">
                                {{ $opportunity['client'] }}
                            </p>

                            <div class="flex flex-wrap gap-1.5 mb-6">
                                @foreach($opportunity['tags'] as $tag)
                                    <span class="text-[10px] font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-600">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        </div>

                        <div class="pt-4 border-t border-slate-200/80 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] font-medium text-slate-600 block">Rémunération / Budget</span>
                                <span class="text-xs font-extrabold text-slate-900">{{ $opportunity['budget'] }}</span>
                            </div>
                            <a href="{{ route('talent.application.create') }}" class="px-3 py-1.5 rounded-lg text-xs font-semibold bg-brand-dark text-white hover:bg-brand-600 transition-colors">
                                Postuler
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- =========================================================================
         11. FINAL DUAL CALL TO ACTION
         ========================================================================= -->
    <section class="py-20 bg-[#F9FAFB]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Card Talents -->
                <div class="bg-white rounded-3xl p-8 sm:p-10 border border-slate-200/90 shadow-sm flex flex-col justify-between space-y-6">
                    <div class="space-y-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-brand-600">Pour les Talents</span>
                        <h3 class="font-display font-extrabold text-2xl sm:text-3xl text-slate-950">
                            Vous avez une compétence. <br>
                            Faites-la connaître.
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Créez votre profil sur Talent Club, valorisez vos réalisations et accédez à des projets rémunérés à votre juste valeur.
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('talent.application.create') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-brand-dark hover:bg-slate-800 text-white text-sm font-semibold transition-colors shadow-sm">
                            <span>Rejoindre Talent Club</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Card Companies -->
                <div class="bg-white rounded-3xl p-8 sm:p-10 border border-slate-200/90 shadow-sm flex flex-col justify-between space-y-6">
                    <div class="space-y-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-brand-600">Pour les Entreprises</span>
                        <h3 class="font-display font-extrabold text-2xl sm:text-3xl text-slate-950">
                            Vous recherchez une compétence ? <br>
                            Trouvez le talent qu'il vous faut.
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Découvrez les meilleurs profils du Bénin et confiez vos projets à des experts prêts à intervenir immédiatement.
                        </p>
                    </div>
                    <div>
                        <a href="#talents" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold transition-colors shadow-sm">
                            <span>Explorer les talents</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-app-layout>
