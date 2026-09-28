<x-app-layout>
    <div class="py-16 sm:py-24 bg-slate-50 min-h-[75vh] flex items-center">
        <div class="max-w-xl mx-auto px-4 sm:px-6 w-full">
            <div class="bg-white rounded-3xl p-8 sm:p-12 shadow-xl border border-slate-200 text-center relative overflow-hidden">
                
                {{-- Decorative top bar --}}
                <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-[#A7C123] via-[#D8F741] to-[#A7C123]"></div>

                <div class="w-16 h-16 rounded-2xl bg-[#242619] border border-[#D8F741]/40 flex items-center justify-center mx-auto mb-6 shadow-md">
                    <x-logo-icon class="w-10 h-10" />
                </div>

                <span class="inline-block px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-[#F1F7D7] border border-[#A7C123]/30 text-[#242619] mb-3">
                    Candidature Enregistrée
                </span>

                <h1 class="text-2xl sm:text-3xl font-extrabold text-[#242619] tracking-tight font-display mb-3">
                    Votre candidature a bien été reçue !
                </h1>

                <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6 font-sans">
                    Merci pour votre candidature à <strong>Talent Club</strong>, {{ $application->first_name }}. Notre équipe va maintenant examiner attentivement votre profil et vos réalisations.
                </p>

                {{-- Reference Badge --}}
                <div class="bg-[#F8FAF0] border border-[#A7C123]/30 rounded-2xl p-5 mb-6 text-center">
                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-500 block mb-1">
                        Référence de candidature
                    </span>
                    <span class="font-mono text-2xl sm:text-3xl font-extrabold text-[#242619] tracking-wide">
                        {{ $application->reference }}
                    </span>
                </div>

                {{-- Info Note --}}
                <div class="bg-[#F8FAF0] border border-[#A7C123]/30 rounded-xl p-4 text-left text-xs sm:text-sm text-[#242619] mb-8 space-y-2">
                    <div class="flex items-center gap-2 font-semibold text-[#242619]">
                        <span>📧</span>
                        <span>Un email de confirmation vient de vous être envoyé.</span>
                    </div>
                    <p class="text-slate-600 leading-relaxed text-xs font-sans">
                        Pensez à vérifier votre boîte de réception (et éventuellement vos spams). Notre délai habituel d'examen est de <strong>5 à 10 jours ouvrables</strong>.
                    </p>
                </div>

                {{-- Return Home CTA --}}
                <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                    <a href="{{ route('home') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-[#242619] hover:bg-[#A7C123] text-white hover:text-[#242619] text-sm font-semibold transition-all shadow-md">
                        <span>← Retour à l'accueil</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
