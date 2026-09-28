@props([
    'class' => 'w-10 h-10',
    'id' => null
])

@php
    $uniqueId = $id ?? 'tc-icon-' . uniqid();
@endphp

<svg {{ $attributes->merge(['class' => $class]) }} viewBox="38 36 66 68" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Talent Club Icon">
    <defs>
        <filter id="{{ $uniqueId }}-glow" x="-50%" y="-50%" width="200%" height="200%">
            <feGaussianBlur stdDeviation="4.5" result="blur" />
            <feComposite in="SourceGraphic" in2="blur" operator="over" />
        </filter>

        <linearGradient id="{{ $uniqueId }}-tr" x1="0.85" y1="0.1" x2="0.15" y2="0.9">
            <stop offset="0%" stop-color="#F2FFAA" />
            <stop offset="35%" stop-color="#D8F741" />
            <stop offset="100%" stop-color="#9EBF17" />
        </linearGradient>
        <linearGradient id="{{ $uniqueId }}-tl" x1="0.15" y1="0.15" x2="0.85" y2="0.85">
            <stop offset="0%" stop-color="#C5E62E" />
            <stop offset="100%" stop-color="#8BA717" />
        </linearGradient>
        <linearGradient id="{{ $uniqueId }}-bl" x1="0.15" y1="0.85" x2="0.85" y2="0.15">
            <stop offset="0%" stop-color="#A5C227" />
            <stop offset="100%" stop-color="#6F8313" />
        </linearGradient>
        <linearGradient id="{{ $uniqueId }}-br" x1="0.85" y1="0.85" x2="0.15" y2="0.15">
            <stop offset="0%" stop-color="#BFDC2D" />
            <stop offset="100%" stop-color="#8AA417" />
        </linearGradient>
    </defs>

    <g id="{{ $uniqueId }}-emblem">
        <path d="M 72,69 C 90.0,70.2 98.9,57.2 99,41 C 83.7,42.5 71.2,52.1 72,69 Z" fill="#D8F741" opacity="0.5" filter="url(#{{ $uniqueId }}-glow)" />
        <path d="M 72,69 C 90.0,70.2 98.9,57.2 99,41 C 83.7,42.5 71.2,52.1 72,69 Z" fill="url(#{{ $uniqueId }}-tr)" />
        <path d="M 61,68 C 60.9,57.4 52.7,51.2 43,50 C 43.7,60.1 49.8,68.4 61,68 Z" fill="url(#{{ $uniqueId }}-tl)" />
        <path d="M 61,81 C 53.7,80.9 49.6,86.4 49,93 C 55.1,92.0 60.5,87.8 61,81 Z" fill="url(#{{ $uniqueId }}-bl)" />
        <path d="M 73,81 C 72.6,92.2 80.9,98.3 91,99 C 90.7,88.5 84.7,80.1 73,81 Z" fill="url(#{{ $uniqueId }}-br)" />
    </g>
</svg>
