<header x-data="{ mobileOpen: false }" class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200/80 transition-all duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <div class="flex items-center gap-8">
                <a href="{{ route('home') }}" class="flex items-center gap-2 group focus:outline-none" aria-label="Talent Club Home">
                    <x-logo theme="light" class="h-10 sm:h-11 w-auto transition-transform duration-200 group-hover:scale-[1.02]" />
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center gap-1 pl-4 border-l border-slate-200 text-sm font-medium text-slate-700">
                    <a href="{{ url('/#talents') }}" class="group px-3 py-2 rounded-lg hover:text-[#242619] hover:bg-[#F8FAF0] transition-colors flex items-center gap-1">
                        <span>Trouver un talent</span>
                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-[#242619] transition-transform group-hover:translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <a href="{{ url('/#services') }}" class="group px-3 py-2 rounded-lg hover:text-[#242619] hover:bg-[#F8FAF0] transition-colors flex items-center gap-1">
                        <span>Services clés en main</span>
                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-[#242619] transition-transform group-hover:translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <a href="{{ url('/#opportunites') }}" class="group px-3 py-2 rounded-lg hover:text-[#242619] hover:bg-[#F8FAF0] transition-colors flex items-center gap-1">
                        <span>Opportunités</span>
                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-[#242619] transition-transform group-hover:translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <a href="{{ url('/#philosophie') }}" class="px-3 py-2 rounded-lg hover:text-[#242619] hover:bg-[#F8FAF0] transition-colors">
                        Pourquoi Talent Club
                    </a>
                </nav>
            </div>

            <!-- Right Actions (Desktop) -->
            <div class="hidden md:flex items-center gap-3">
                <a href="{{ url('/#entreprises') }}" class="text-sm font-semibold text-slate-700 hover:text-[#242619] px-4 py-2.5 rounded-lg hover:bg-[#F8FAF0] transition-colors">
                    Espace Entreprises
                </a>
                <a href="{{ route('talent.application.create') }}" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-full bg-[#A7C123] hover:bg-[#D8F741] text-[#242619] text-sm font-bold shadow-sm hover:shadow-md hover:scale-[1.02] transition-all duration-200 group">
                    <span>Rejoindre Talent Club</span>
                    <svg class="w-4 h-4 text-[#242619] group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex items-center md:hidden">
                <button @click="mobileOpen = !mobileOpen" type="button" class="p-2.5 rounded-xl text-slate-600 hover:text-[#242619] hover:bg-[#F8FAF0] focus:outline-none" aria-label="Menu principal">
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
            <a @click="mobileOpen = false" href="{{ url('/#accueil') }}" class="px-3 py-2 rounded-lg hover:bg-[#F8FAF0]">Accueil</a>
            <a @click="mobileOpen = false" href="{{ url('/#talents') }}" class="px-3 py-2 rounded-lg hover:bg-[#F8FAF0]">Talents</a>
            <a @click="mobileOpen = false" href="{{ url('/#services') }}" class="px-3 py-2 rounded-lg hover:bg-[#F8FAF0]">Services</a>
            <a @click="mobileOpen = false" href="{{ url('/#opportunites') }}" class="px-3 py-2 rounded-lg hover:bg-[#F8FAF0]">Opportunités</a>
            <a @click="mobileOpen = false" href="{{ url('/#philosophie') }}" class="px-3 py-2 rounded-lg hover:bg-[#F8FAF0]">À propos</a>
        </div>
        <div class="pt-3 border-t border-slate-200 flex flex-col gap-2">
            <a @click="mobileOpen = false" href="{{ url('/#entreprises') }}" class="w-full text-center py-2.5 text-sm font-semibold text-slate-800 bg-[#F8FAF0] rounded-xl">
                Espace Entreprises
            </a>
            <a @click="mobileOpen = false" href="{{ route('talent.application.create') }}" class="w-full text-center py-3 text-sm font-bold text-[#242619] bg-[#A7C123] hover:bg-[#D8F741] rounded-full shadow-sm transition-colors">
                Rejoindre Talent Club
            </a>
        </div>
    </div>
</header>
