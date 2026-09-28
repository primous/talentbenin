<x-app-layout>
    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Top Intro Banner --}}
            <div class="text-center max-w-2xl mx-auto mb-8">

                <h1 class="text-3xl sm:text-4xl font-extrabold text-[#242619] tracking-tight font-display">
                    Postuler et rejoindre <span class="text-[#A7C123]">Talent Club</span>
                </h1>
                <p class="mt-3 text-sm sm:text-base text-slate-600 leading-relaxed font-sans">
                    Rejoignez la communauté de référence des jeunes talents béninois. Valorisez votre expertise, accédez à des opportunités concrètes et collaborez avec les meilleures entreprises.
                </p>
            </div>

            {{-- Multi-Step Form Livewire Component --}}
            <livewire:application-form />

        </div>
    </div>
</x-app-layout>
