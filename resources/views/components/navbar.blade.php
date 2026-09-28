<header x-data="{ mobileOpen: false }" class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200/80 transition-all duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <div class="flex items-center gap-8">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group focus:outline-none">
                    <div class="w-10 h-10 rounded-xl bg-brand-dark flex items-center justify-center text-white font-display font-extrabold text-lg shadow-sm border border-slate-700/50 group-hover:scale-105 transition-transform duration-200">
                        TC
                    </div>
                    <div class="flex flex-col">
                        <span class="font-display font-extrabold text-xl tracking-tight text-slate-900 group-hover:text-brand-600 transition-colors">
                            TALENT<span class="text-brand-600 font-black">.</span>CLUB
                        </span>
                        <span class="text-[10px] font-semibold uppercase tracking-widest text-slate-600 -mt-1">
                            Bénin Digital Hub
                        </span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center gap-1 pl-4 border-l border-slate-200 text-sm font-medium text-slate-600">
                    <a href="{{ url('/#accueil') }}" class="px-3.5 py-2 rounded-lg hover:text-slate-900 hover:bg-slate-100 transition-colors">Accueil</a>
                    <a href="{{ url('/#talents') }}" class="px-3.5 py-2 rounded-lg hover:text-slate-900 hover:bg-slate-100 transition-colors">Talents</a>
                    <a href="{{ url('/#services') }}" class="px-3.5 py-2 rounded-lg hover:text-slate-900 hover:bg-slate-100 transition-colors">Services</a>
                    <a href="{{ url('/#opportunites') }}" class="px-3.5 py-2 rounded-lg hover:text-slate-900 hover:bg-slate-100 transition-colors">Opportunités</a>
                    <a href="{{ url('/#philosophie') }}" class="px-3.5 py-2 rounded-lg hover:text-slate-900 hover:bg-slate-100 transition-colors">À propos</a>
                </nav>
            </div>

            <!-- Right Actions (Desktop) -->
            <div class="hidden md:flex items-center gap-3">
                <a href="{{ url('/#entreprises') }}" class="text-sm font-semibold text-slate-700 hover:text-slate-950 px-4 py-2.5 rounded-lg hover:bg-slate-100 transition-colors">
                    Espace Entreprises
                </a>
                <a href="{{ route('talent.application.create') }}" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-xl bg-brand-dark hover:bg-slate-800 text-white text-sm font-semibold shadow-sm hover:shadow transition-all duration-200 group">
                    <span>Rejoindre Talent Club</span>
                    <svg class="w-4 h-4 text-brand-400 group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex items-center md:hidden">
                <button @click="mobileOpen = !mobileOpen" type="button" class="p-2.5 rounded-xl text-slate-600 hover:text-slate-900 hover:bg-slate-100 focus:outline-none" aria-label="Menu principal">
                    <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-cloak x-show="mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div x-cloak x-show="mobileOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="md:hidden border-b border-slate-200 bg-white px-4 pt-2 pb-6 space-y-3">
        <div class="grid gap-1 py-2 text-base font-medium text-slate-700">
            <a @click="mobileOpen = false" href="{{ url('/#accueil') }}" class="px-3 py-2 rounded-lg hover:bg-slate-100">Accueil</a>
            <a @click="mobileOpen = false" href="{{ url('/#talents') }}" class="px-3 py-2 rounded-lg hover:bg-slate-100">Talents</a>
            <a @click="mobileOpen = false" href="{{ url('/#services') }}" class="px-3 py-2 rounded-lg hover:bg-slate-100">Services</a>
            <a @click="mobileOpen = false" href="{{ url('/#opportunites') }}" class="px-3 py-2 rounded-lg hover:bg-slate-100">Opportunités</a>
            <a @click="mobileOpen = false" href="{{ url('/#philosophie') }}" class="px-3 py-2 rounded-lg hover:bg-slate-100">À propos</a>
        </div>
        <div class="pt-3 border-t border-slate-200 flex flex-col gap-2">
            <a @click="mobileOpen = false" href="{{ url('/#entreprises') }}" class="w-full text-center py-2.5 text-sm font-semibold text-slate-800 bg-slate-100 rounded-xl">
                Espace Entreprises
            </a>
            <a @click="mobileOpen = false" href="{{ route('talent.application.create') }}" class="w-full text-center py-3 text-sm font-semibold text-white bg-brand-dark rounded-xl shadow-sm">
                Rejoindre Talent Club
            </a>
        </div>
    </div>
</header>
