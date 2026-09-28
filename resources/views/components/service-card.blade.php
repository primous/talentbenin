@props(['service'])

<div class="group bg-white rounded-2xl border border-slate-200/90 hover:border-[#A7C123] hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between">
    <div>
        <!-- Card Media Thumbnail (Image 2 style) -->
        <div class="relative aspect-[16/10] w-full overflow-hidden bg-slate-100">
            <img 
                src="{{ $service['image'] ?? 'https://images.unsplash.com/photo-1547658719-da2b51169166?auto=format&fit=crop&w=700&h=420&q=80' }}" 
                alt="{{ $service['title'] }}" 
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                loading="lazy"
            >
            <!-- Top Gradient Overlay for readability -->
            <div class="absolute inset-0 bg-gradient-to-t from-[#242619]/70 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>

            <!-- Floating Top Badges -->
            <div class="absolute top-3 left-3 flex items-center gap-1.5">
                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[10px] font-bold bg-[#242619]/90 text-white backdrop-blur-md border border-white/20 shadow-sm">
                    <svg class="w-3 h-3 text-[#D8F741]" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Certifié</span>
                </span>
                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-semibold bg-white/95 text-[#242619] backdrop-blur-md shadow-xs">
                    {{ $service['category'] }}
                </span>
            </div>

            <!-- Delivery Time Floating Pill -->
            <div class="absolute bottom-3 left-3">
                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md text-[10px] font-medium bg-[#242619]/80 text-white/90 backdrop-blur-xs">
                    <svg class="w-3 h-3 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ $service['delay'] }}</span>
                </span>
            </div>
        </div>

        <!-- Card Body Content -->
        <div class="p-5 space-y-3">
            <!-- Title -->
            <h3 class="font-display font-bold text-base sm:text-lg text-slate-900 group-hover:text-[#A7C123] transition-colors line-clamp-2 leading-snug">
                {{ $service['title'] }}
            </h3>

            <!-- Provider info -->
            <div class="flex items-center gap-2 text-xs text-slate-600 font-medium">
                <span>Par <strong class="text-[#242619]">{{ $service['talent'] }}</strong></span>
                <span class="text-slate-300">•</span>
                <span class="text-[#A7C123] font-bold">Talent Club Pro</span>
            </div>

            <!-- Description -->
            <p class="text-xs text-slate-600 line-clamp-2 leading-relaxed">
                {{ $service['description'] }}
            </p>

            <!-- Badges & Ratings Row (Image 2 style) -->
            <div class="flex flex-wrap items-center gap-2 pt-1">
                @if(isset($service['badge']))
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded text-[11px] font-bold bg-[#F1F7D7] text-[#242619] border border-[#A7C123]/40">
                        {{ $service['badge'] }}
                    </span>
                @endif
                <div class="flex items-center gap-1 text-xs">
                    <span class="font-bold text-[#A7C123]">★ {{ $service['rating'] }}</span>
                    <span class="text-slate-600 text-[11px]">({{ $service['reviews_count'] ?? 30 }} avis)</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Footer with Pricing & CTA (Image 2 style) -->
    <div class="p-5 pt-0 mt-2">
        <div class="pt-3 border-t border-slate-100 flex items-center justify-between gap-3">
            <div class="flex items-baseline gap-2">
                <span class="font-display font-extrabold text-lg sm:text-xl text-[#242619]">
                    {{ $service['price'] }}
                </span>
                @if(isset($service['old_price']))
                    <span class="text-xs text-slate-400 line-through">
                        {{ $service['old_price'] }}
                    </span>
                @endif
            </div>

            <a href="{{ url('/#entreprises') }}" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl text-xs font-bold bg-[#242619] hover:bg-[#A7C123] text-white hover:text-[#242619] transition-all duration-200 shadow-sm group-hover:shadow">
                <span>Commander</span>
                <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </div>
</div>
