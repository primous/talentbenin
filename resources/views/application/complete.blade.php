<x-app-layout>
    <div class="py-12 sm:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            
            {{-- Header --}}
            <div class="text-center mb-8">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-900 mb-2">
                    <span>💬</span> Complément d'information
                </span>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight font-display">
                    Précisions concernant votre candidature
                </h1>
                <p class="mt-2 text-sm text-slate-600">
                    Référence dossier : <strong class="font-mono text-brand-700">{{ $application->reference }}</strong>
                </p>
            </div>

            @if(session('success'))
            <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900 text-sm flex items-start gap-3 shadow-sm">
                <span class="text-xl">✅</span>
                <div>
                    <h4 class="font-bold">Informations transmises avec succès !</h4>
                    <p class="mt-1 text-emerald-800">{{ session('success') }}</p>
                </div>
            </div>
            @endif

            <div class="bg-white rounded-3xl p-6 sm:p-10 shadow-lg border border-slate-200 space-y-8">
                
                {{-- Admin message block --}}
                <div class="p-5 rounded-2xl bg-amber-50/80 border border-amber-200/90 text-amber-950 space-y-2">
                    <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-amber-900">
                        <span>⚠️ Message de l'équipe Talent Club :</span>
                    </div>
                    <p class="text-sm sm:text-base font-medium leading-relaxed">
                        {{ $application->information_request_message ?: "Notre équipe souhaite des détails complémentaires sur vos réalisations et votre parcours." }}
                    </p>
                </div>

                {{-- Previous response if already provided --}}
                @if($application->candidate_response_message)
                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 space-y-1">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Votre dernière réponse :</span>
                    <p class="text-sm text-slate-800 whitespace-pre-line leading-relaxed">
                        {{ $application->candidate_response_message }}
                    </p>
                </div>
                @endif

                {{-- Existing profile summary --}}
                <div class="border border-slate-200/80 rounded-2xl p-5 bg-slate-50/50">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-3">Récapitulatif de votre dossier</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs sm:text-sm">
                        <div><span class="text-slate-500">Candidat :</span> <strong class="text-slate-900">{{ $application->first_name }} {{ $application->last_name }}</strong></div>
                        <div><span class="text-slate-500">Activité :</span> <strong class="text-slate-900">{{ $application->primary_activity }}</strong></div>
                        <div><span class="text-slate-500">Ville :</span> <strong class="text-slate-900">{{ $application->city }}</strong></div>
                        <div><span class="text-slate-500">Expérience :</span> <strong class="text-slate-900">{{ $application->experience_duration }}</strong></div>
                        <div><span class="text-slate-500">Statut actuel :</span> 
                            <span class="inline-block px-2 py-0.5 rounded-full text-xs font-bold bg-amber-100 text-amber-800">
                                {{ $application->status_label }}
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Response form --}}
                <form action="{{ route('talent.application.submit-completion', $application->reference) }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="candidate_response" class="block text-sm font-bold text-slate-900 mb-2">
                            Votre réponse / Précisions apportées <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            name="candidate_response" 
                            id="candidate_response" 
                            rows="5" 
                            required
                            placeholder="Détaillez vos réponses aux questions de l'équipe (ex: précisions sur vos projets, liens vers d'autres réalisations, contexte professionnel)..."
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all {{ $errors->has('candidate_response') ? 'border-red-500' : '' }}"
                        >{{ old('candidate_response') }}</textarea>
                        @error('candidate_response')
                            <p class="text-xs text-red-600 mt-1 font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="additional_links" class="block text-sm font-bold text-slate-900 mb-2">
                            Liens complémentaires (Portfolio, GitHub, Behance, Drive...) — Optionnel
                        </label>
                        <input 
                            type="text" 
                            name="additional_links" 
                            id="additional_links" 
                            value="{{ old('additional_links') }}"
                            placeholder="https://..."
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 text-sm focus:border-brand-600 focus:ring-2 focus:ring-brand-500/20 outline-none transition-all"
                        >
                    </div>

                    <div class="pt-4 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-3">
                        <a href="{{ route('home') }}" class="text-sm font-semibold text-slate-600 hover:text-slate-900">
                            ← Retour à l'accueil
                        </a>
                        <button type="submit" class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-brand-dark hover:bg-slate-800 text-white text-sm font-bold shadow-md transition-all">
                            Transmettre mes précisions →
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>
