@props([
    'title',
    'subtitle' => null,
    'align' => 'center', // center, left
])

@php
    $alignClasses = $align === 'left' ? 'text-left items-start' : 'text-center items-center';
    $containerClasses = 'max-w-3xl flex flex-col mb-12 ' . ($align === 'left' ? '' : 'mx-auto ') . $alignClasses;
@endphp

<div {{ $attributes->merge(['class' => $containerClasses]) }}>
    @if($subtitle)
        <span class="text-xs md:text-sm font-semibold tracking-[0.2em] text-amber-500 uppercase block mb-3 font-sans">
            {{ $subtitle }}
        </span>
    @endif
    
    <h2 class="text-3xl md:text-5xl font-bold font-serif text-slate-900 tracking-wide leading-tight">
        {{ $title }}
    </h2>
    
    <div class="mt-4 flex items-center gap-2">
        <span class="h-[1px] w-12 bg-gradient-to-r from-transparent to-amber-600/60"></span>
        <span class="w-1.5 h-1.5 rotate-45 bg-amber-500 shadow-[0_0_8px_rgba(245,158,11,0.6)]"></span>
        <span class="h-[1px] w-12 bg-gradient-to-l from-transparent to-amber-600/60"></span>
    </div>
</div>
