<footer class="bg-brand-dark text-slate-400 border-t border-slate-800 pt-16 pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-16">
            <!-- Brand Column -->
            <div class="lg:col-span-2 space-y-5">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-brand-600 flex items-center justify-center text-white font-display font-extrabold text-lg shadow-sm">
                        TC
                    </div>
                    <span class="font-display font-extrabold text-2xl tracking-tight text-white">
                        TALENT<span class="text-brand-500 font-black">.</span>CLUB
                    </span>
                </a>
                <p class="text-slate-300 text-sm max-w-sm leading-relaxed">
                    « Réunir les talents. Créer les connexions. Construire les opportunités. »
                </p>
                <p class="text-xs text-slate-300 max-w-md leading-relaxed">
                    La première plateforme dédiée à la mise en lumière et à la professionnalisation des jeunes talents béninois du numérique, du design et des affaires.
                </p>
                <!-- Location indicator -->
                <div class="flex items-center gap-2 text-xs text-slate-300 font-medium pt-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span>Cotonou · Abomey-Calavi · Porto-Novo · Diaspora</span>
                </div>
            </div>

            <!-- Links Column 1: Explorer -->
            <div class="space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white">Explorer</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="{{ url('/#talents') }}" class="hover:text-white transition-colors">Tous les talents</a></li>
                    <li><a href="{{ url('/#services') }}" class="hover:text-white transition-colors">Catalogue de services</a></li>
                    <li><a href="{{ url('/#categories') }}" class="hover:text-white transition-colors">Domaines d'expertise</a></li>
                    <li><a href="{{ url('/#opportunites') }}" class="hover:text-white transition-colors">Missions & Opportunités</a></li>
                </ul>
            </div>

            <!-- Links Column 2: Écosystème -->
            <div class="space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white">Écosystème</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="{{ url('/#entreprises') }}" class="hover:text-white transition-colors">Pour les entreprises</a></li>
                    <li><a href="{{ route('talent.application.create') }}" class="hover:text-white transition-colors">Postuler comme talent</a></li>
                    <li><a href="{{ url('/#philosophie') }}" class="hover:text-white transition-colors">Notre vision & charte</a></li>
                    <li><a href="{{ url('/#comment-ca-marche') }}" class="hover:text-white transition-colors">Comment ça marche</a></li>
                </ul>
            </div>

            <!-- Links Column 3: Contact & Légal -->
            <div class="space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white">Contact & Légal</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="mailto:contact@talentclub.bj" class="hover:text-white transition-colors">contact@talentclub.bj</a></li>
                    <li><span class="text-slate-300">Cotonou, République du Bénin</span></li>
                    <li class="pt-2"><a href="#" class="hover:text-white transition-colors">Politique de confidentialité</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Conditions d'utilisation</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="pt-8 border-t border-slate-800/80 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-300">
            <p>© {{ date('Y') }} TALENT CLUB. Tous droits réservés.</p>
            <p class="flex items-center gap-2">
                Conçu avec exigence pour l'écosystème béninois 🇧🇯
            </p>
        </div>
    </div>
</footer>
