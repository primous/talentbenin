@props([
    'variant' => 'primary',
    'size' => 'md',
    'href' => null,
    'type' => 'button'
])

@php
    $baseClasses = "inline-flex items-center justify-center font-semibold rounded-xl transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2";
    
    $sizeClasses = [
        'sm' => 'text-xs px-3.5 py-2 gap-1.5',
        'md' => 'text-sm px-5 py-2.5 gap-2',
        'lg' => 'text-base px-6 py-3.5 gap-2.5',
    ][$size] ?? 'text-sm px-5 py-2.5 gap-2';

    $variantClasses = [
        'primary' => 'bg-[#A7C123] text-[#242619] hover:bg-[#D8F741] font-bold shadow-sm hover:shadow focus:ring-[#A7C123]',
        'dark' => 'bg-[#242619] text-white hover:bg-[#A7C123] hover:text-[#242619] font-bold shadow-sm hover:shadow focus:ring-[#242619]',
        'secondary' => 'bg-[#F8FAF0] text-[#242619] hover:bg-[#F1F7D7] border border-[#A7C123]/30 focus:ring-[#A7C123]',
        'outline' => 'border border-[#A7C123]/40 bg-white text-[#242619] hover:bg-[#F8FAF0] hover:border-[#A7C123] focus:ring-[#A7C123]',
        'white' => 'bg-white text-[#242619] hover:bg-[#F8FAF0] shadow-sm focus:ring-white',
    ][$variant] ?? 'bg-[#A7C123] text-[#242619] hover:bg-[#D8F741] focus:ring-[#A7C123]';

    $classes = "$baseClasses $sizeClasses $variantClasses";
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
