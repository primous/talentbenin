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
        'primary' => 'bg-brand-600 text-white hover:bg-brand-700 shadow-sm hover:shadow focus:ring-brand-500',
        'dark' => 'bg-brand-dark text-white hover:bg-slate-800 shadow-sm hover:shadow focus:ring-slate-900',
        'secondary' => 'bg-slate-100 text-slate-800 hover:bg-slate-200 focus:ring-slate-400',
        'outline' => 'border border-slate-300 bg-white text-slate-700 hover:bg-slate-50 hover:border-slate-400 focus:ring-brand-500',
        'white' => 'bg-white text-brand-dark hover:bg-slate-100 shadow-sm focus:ring-white',
    ][$variant] ?? 'bg-brand-600 text-white hover:bg-brand-700 focus:ring-brand-500';

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
