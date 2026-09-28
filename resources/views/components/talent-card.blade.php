@props(['talent'])

<div class="group bg-white rounded-2xl border border-slate-200/90 hover:border-brand-500/60 p-6 flex flex-col justify-between transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative overflow-hidden">
    <!-- Top accent highlight line on hover -->
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-brand-600 to-emerald-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

    <div>
        <!-- Profile Header -->
        <div class="flex items-start gap-4 mb-4">
            <div class="relative">
                <img src="{{ $talent['avatar'] }}" alt="{{ $talent['name'] }}" class="w-16 h-16 rounded-2xl object-cover ring-2 ring-slate-100 group-hover:ring-brand-500/30 transition-all duration-300 shadow-sm">
                <!-- Verified Checkmark -->
                <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-brand-600 text-white rounded-full flex items-center justify-center text-[10px] ring-2 ring-white" title="Talent Vérifié par Talent Club">
                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
            </div>

            <div class="flex-1 min-w-0">
                <div class="flex items-center justify-between gap-1">
                    <h3 class="font-display font-bold text-lg text-slate-900 truncate group-hover:text-brand-600 transition-colors">
                        {{ $talent['name'] }}
                    </h3>
                    @if(isset($talent['badge']))
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/60 shrink-0">
                            {{ $talent['badge'] }}
                        </span>
                    @endif
                </div>

                <p class="text-xs font-semibold text-brand-700 truncate mt-0.5">
                    {{ $talent['title'] }}
                </p>

                <div class="flex items-center gap-1.5 text-xs text-slate-600 mt-1">
                    <svg class="w-3.5 h-3.5 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>{{ $talent['location'] }}</span>
                </div>
            </div>
        </div>

        <!-- Bio description -->
        <p class="text-xs text-slate-600 line-clamp-2 leading-relaxed mb-4">
            {{ $talent['bio'] }}
        </p>

        <!-- Skills tags -->
        <div class="flex flex-wrap gap-1.5 mb-5">
            @foreach($talent['skills'] as $skill)
                <span class="text-[11px] font-medium px-2.5 py-1 rounded-md bg-slate-100/90 text-slate-700 group-hover:bg-brand-50 group-hover:text-brand-700 transition-colors">
                    {{ $skill }}
                </span>
            @endforeach
        </div>
    </div>

    <!-- Bottom info & CTA -->
    <div class="pt-4 border-t border-slate-100 flex items-center justify-between gap-2 mt-auto">
        <div>
            <span class="block text-[10px] uppercase font-semibold text-slate-600">Prestations dès</span>
            <span class="text-sm font-bold text-slate-900">{{ $talent['starting_price'] }}</span>
        </div>

        <a href="{{ url('/#entreprises') }}" class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl text-xs font-semibold bg-slate-900 text-white hover:bg-brand-600 transition-all duration-200 shadow-sm group-hover:shadow">
            <span>Contacter</span>
            <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
</div>
