<x-app-layout>
    <div class="py-16 sm:py-24 bg-slate-50 min-h-[75vh] flex items-center">
        <div class="max-w-xl mx-auto px-4 sm:px-6 w-full">
            <div class="bg-white rounded-3xl p-8 sm:p-12 shadow-xl border border-slate-200 text-center relative overflow-hidden">
                
                {{-- Decorative top bar --}}
                <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-brand-600 via-emerald-500 to-teal-600"></div>

                <div class="w-16 h-16 rounded-2xl bg-emerald-50 border border-emerald-200/80 text-emerald-600 flex items-center justify-center text-3xl mx-auto mb-6 shadow-sm">
                    ✨
                </div>

                <span class="inline-block px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-emerald-100 text-emerald-800 mb-3">
                    Candidature Enregistrée
                </span>

                <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight font-display mb-3">
                    Votre candidature a bien été reçue !
                </h1>

                <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                    Merci pour votre candidature à <strong>Talent Club</strong>, {{ $application->first_name }}. Notre équipe va maintenant examiner attentivement votre profil et vos réalisations.
                </p>

                {{-- Reference Badge --}}
                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 mb-6 text-center">
                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-500 block mb-1">
                        Référence de candidature
                    </span>
                    <span class="font-mono text-2xl sm:text-3xl font-extrabold text-brand-700 tracking-wide">
                        {{ $application->reference }}
                    </span>
                </div>

                {{-- Info Note --}}
                <div class="bg-blue-50/70 border border-blue-200/80 rounded-xl p-4 text-left text-xs sm:text-sm text-blue-900 mb-8 space-y-2">
                    <div class="flex items-center gap-2 font-semibold text-blue-950">
                        <span>📧</span>
                        <span>Un email de confirmation vient de vous être envoyé.</span>
                    </div>
                    <p class="text-blue-800/90 leading-relaxed text-xs">
                        Pensez à vérifier votre boîte de réception (et éventuellement vos spams). Notre délai habituel d'examen est de <strong>5 à 10 jours ouvrables</strong>.
                    </p>
                </div>

                {{-- Return Home CTA --}}
                <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                    <a href="{{ route('home') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-brand-dark hover:bg-slate-800 text-white text-sm font-semibold transition-all shadow-md">
                        <span>← Retour à l'accueil</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
