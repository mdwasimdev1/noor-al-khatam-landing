@props([
    'variant' => 'primary', // primary, secondary, outline, text
    'href' => null,
    'type' => 'button',
    'icon' => null,
])

@php
    $baseStyles = "inline-flex items-center justify-center font-sans font-semibold rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-amber-500/50 focus:ring-offset-2 focus:ring-offset-slate-950 active:scale-98 disabled:opacity-50 disabled:pointer-events-none cursor-pointer";
    
    $variants = [
        'primary' => 'bg-gradient-to-r from-amber-600 to-amber-500 hover:from-amber-500 hover:to-amber-400 text-slate-950 shadow-lg shadow-amber-500/20 hover:shadow-amber-500/30 px-6 py-3 md:px-8 md:py-3.5',
        'secondary' => 'bg-emerald-800 hover:bg-emerald-700 text-emerald-50 shadow-lg shadow-emerald-950/30 px-6 py-3 md:px-8 md:py-3.5',
        'outline' => 'border-2 border-amber-600/60 hover:border-amber-500 text-amber-500 hover:text-amber-400 bg-transparent px-6 py-2.5 md:px-8 md:py-3',
        'text' => 'text-amber-500 hover:text-amber-400 px-4 py-2 hover:bg-slate-900/60',
    ];

    $classes = $baseStyles . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon)
            <span class="mr-2 inline-flex items-center justify-center">{{ $icon }}</span>
        @endif
        <span>{{ $slot }}</span>
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon)
            <span class="mr-2 inline-flex items-center justify-center">{{ $icon }}</span>
        @endif
        <span>{{ $slot }}</span>
    </button>
@endif
