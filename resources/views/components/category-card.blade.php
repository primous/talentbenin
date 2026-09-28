@props(['category'])

<a href="#recherche" class="group bg-white rounded-2xl p-6 border border-slate-200/90 hover:border-[#A7C123] hover:shadow-lg transition-all duration-200 flex flex-col justify-between block relative overflow-hidden">
    <div>
        <!-- Icon & Count Header -->
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 rounded-xl bg-slate-100 group-hover:bg-[#F1F7D7] text-slate-800 group-hover:text-[#242619] flex items-center justify-center transition-colors duration-200">
                @switch($category['icon'])
                    @case('code')
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                        @break
                    @case('palette')
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4 5 5 0 014-5h10a4 4 0 014 4 5 5 0 01-4 5H7z" />
                        </svg>
                        @break
                    @case('trending-up')
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        @break
                    @case('video')
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        @break
                    @case('file-text')
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        @break
                    @case('cpu')
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                        </svg>
                        @break
                    @default
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                @endswitch
            </div>

            <span class="inline-flex items-center text-xs font-semibold px-2.5 py-1 rounded-full bg-slate-100 text-slate-700 group-hover:bg-[#F1F7D7] group-hover:text-[#242619] transition-colors">
                {{ $category['count'] }} talents
            </span>
        </div>

        <h4 class="font-display font-bold text-base text-[#242619] group-hover:text-[#A7C123] transition-colors mb-1.5">
            {{ $category['name'] }}
        </h4>

        <p class="text-xs text-slate-600 line-clamp-2 leading-relaxed mb-4">
            {{ $category['description'] }}
        </p>
    </div>

    <!-- Popular tags in category -->
    <div class="flex flex-wrap gap-1 pt-3 border-t border-slate-100">
        @foreach($category['tags'] as $tag)
            <span class="text-[10px] text-slate-600 group-hover:text-slate-700">
                #{{ $tag }}
            </span>
        @endforeach
    </div>
</a>
