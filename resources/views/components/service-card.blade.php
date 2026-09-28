@props(['service'])

<div class="group bg-white rounded-2xl border border-slate-200/90 hover:border-brand-500 p-6 flex flex-col justify-between transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative">
    <div>
        <!-- Category & Badge -->
        <div class="flex items-center justify-between gap-2 mb-3">
            <span class="text-xs font-semibold px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">
                {{ $service['category'] }}
            </span>
            @if(isset($service['badge']))
                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded-full bg-brand-50 text-brand-700 border border-brand-200/60">
                    {{ $service['badge'] }}
                </span>
            @endif
        </div>

        <!-- Service Title -->
        <h4 class="font-display font-bold text-lg text-slate-900 group-hover:text-brand-600 transition-colors mb-2">
            {{ $service['title'] }}
        </h4>

        <!-- Service Description -->
        <p class="text-xs text-slate-600 leading-relaxed mb-4">
            {{ $service['description'] }}
        </p>

        <!-- Delivery time and Talent indicator -->
        <div class="flex items-center gap-3 text-xs text-slate-600 py-3 border-y border-slate-100 mb-4">
            <div class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Délai : <strong class="text-slate-800">{{ $service['delay'] }}</strong></span>
            </div>
            <div class="w-1 h-1 rounded-full bg-slate-300"></div>
            <div class="flex items-center gap-1.5">
                <span>Par : <strong class="text-slate-800">{{ $service['talent'] }}</strong></span>
                <span class="text-amber-500 text-xs font-semibold">★ {{ $service['rating'] }}</span>
            </div>
        </div>
    </div>

    <!-- Pricing & Action -->
    <div class="flex items-center justify-between gap-2 pt-1">
        <div>
            <span class="text-[10px] font-semibold uppercase text-slate-600 block">{{ $service['price_type'] }}</span>
            <span class="font-display font-extrabold text-xl text-slate-900 text-brand-700">{{ $service['price'] }}</span>
        </div>

        <a href="{{ url('/#entreprises') }}" class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-xl text-xs font-semibold bg-brand-dark text-white hover:bg-brand-600 transition-colors shadow-sm">
            <span>Commander</span>
            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
        </a>
    </div>
</div>
