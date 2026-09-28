@props(['talent'])

<div class="group bg-white rounded-3xl border border-slate-200/90 hover:border-[#A7C123] hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between p-4 sm:p-5">
    <div>
        <!-- Portrait Image (Image 1 style) -->
        <div class="relative w-full aspect-[4/3] rounded-2xl overflow-hidden bg-slate-100 mb-4">
            <img 
                src="{{ $talent['avatar'] }}" 
                alt="{{ $talent['name'] }}" 
                class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
                loading="lazy"
            >
            <!-- Badge top-right -->
            @if(isset($talent['badge']))
                <div class="absolute top-2.5 right-2.5">
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[10px] font-bold bg-white/95 text-[#242619] backdrop-blur-md shadow-xs border border-slate-100">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#A7C123]"></span>
                        <span>{{ $talent['badge'] }}</span>
                    </span>
                </div>
            @endif

            <!-- Location pill bottom-left -->
            <div class="absolute bottom-2.5 left-2.5">
                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md text-[10px] font-medium bg-[#242619]/90 text-white backdrop-blur-xs">
                    <svg class="w-3 h-3 text-[#D8F741]" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                    <span>{{ $talent['location'] }}</span>
                </span>
            </div>
        </div>

        <!-- Name & Rating Row (Image 1 style) -->
        <div class="space-y-1.5">
            <div class="flex items-center justify-between gap-2">
                <h3 class="font-display font-bold text-base sm:text-lg text-slate-900 group-hover:text-[#A7C123] transition-colors truncate">
                    {{ $talent['name'] }}
                </h3>
                <div class="inline-flex items-center gap-1 text-xs font-bold text-[#242619] bg-[#F1F7D7] px-2 py-0.5 rounded-full shrink-0">
                    <span class="text-[#A7C123]">★</span>
                    <span>{{ $talent['rating'] }}</span>
                </div>
            </div>

            <!-- Role / Specialty -->
            <p class="text-xs font-bold text-[#A7C123] truncate">
                {{ $talent['title'] }}
            </p>

            <!-- Bio summary -->
            <p class="text-xs text-slate-600 line-clamp-2 leading-relaxed pt-1">
                {{ $talent['bio'] }}
            </p>

            <!-- Skills chips -->
            <div class="flex flex-wrap gap-1.5 pt-2">
                @foreach(array_slice($talent['skills'], 0, 3) as $skill)
                    <span class="text-[10px] font-medium px-2 py-0.5 rounded-md bg-[#F8FAF0] text-slate-700 border border-slate-100">
                        {{ $skill }}
                    </span>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Bottom Pricing & Action Button -->
    <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between gap-2">
        <div>
            <span class="block text-[9px] uppercase font-bold text-slate-500 tracking-wider">Tarif dès</span>
            <span class="text-xs sm:text-sm font-bold text-[#242619]">{{ $talent['starting_price'] }}</span>
        </div>

        <a href="{{ url('/#entreprises') }}" class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-xl text-xs font-bold bg-[#242619] hover:bg-[#A7C123] text-white hover:text-[#242619] transition-all duration-200 shadow-sm group-hover:shadow">
            <span>Contacter</span>
            <svg class="w-3 h-3 group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
</div>
