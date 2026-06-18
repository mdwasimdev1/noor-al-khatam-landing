@extends('layouts.admin')

@section('title', 'Gallery Manager')
@section('page-title', 'Gallery Manager')
@section('page-subtitle', 'Add, edit, and remove product slides in the gallery section')

@section('content')
<div class="mx-auto max-w-6xl">

    {{-- Header Bar --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <p class="text-xs text-slate-500 mt-1">{{ $items->count() }} slide(s) in gallery</p>
        </div>
        <a href="{{ route('admin.gallery.create') }}"
           class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-lg shadow-amber-500/20 transition-all duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Add New Slide
        </a>
    </div>

    @if($items->isEmpty())
        <div class="bg-white border border-dashed border-slate-300 rounded-xl p-16 text-center">
            <div class="w-14 h-14 rounded-full bg-amber-50 border border-amber-200/60 flex items-center justify-center text-amber-500 mx-auto mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
            <p class="font-semibold text-slate-700">No gallery slides yet</p>
            <p class="text-xs text-slate-500 mt-1">Click "Add New Slide" to get started.</p>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($items as $item)
            <div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md hover:border-amber-200 transition-all duration-200 flex flex-col">
                {{-- Image --}}
                <div class="aspect-video overflow-hidden bg-slate-100 relative">
                    <img src="{{ asset('images/' . $item->image) }}"
                         alt="{{ $item->title }}"
                         class="w-full h-full object-cover">
                    {{-- Badge --}}
                    <span class="absolute top-2 left-2 text-[9px] font-bold tracking-widest uppercase px-2 py-0.5 rounded-full
                        @if($item->badge_color === 'amber') bg-amber-500/20 border border-amber-400/40 text-amber-700
                        @elseif($item->badge_color === 'emerald') bg-emerald-500/20 border border-emerald-400/40 text-emerald-700
                        @elseif($item->badge_color === 'sky') bg-sky-500/20 border border-sky-400/40 text-sky-700
                        @elseif($item->badge_color === 'rose') bg-rose-500/20 border border-rose-400/40 text-rose-700
                        @elseif($item->badge_color === 'violet') bg-violet-500/20 border border-violet-400/40 text-violet-700
                        @else bg-slate-500/20 border border-slate-400/40 text-slate-700
                        @endif">
                        {{ $item->badge }}
                    </span>
                    {{-- Sort Order --}}
                    <span class="absolute top-2 right-2 bg-white/90 text-slate-700 text-[9px] font-bold px-2 py-0.5 rounded-full border border-slate-200">
                        #{{ $item->sort_order }}
                    </span>
                </div>

                {{-- Info --}}
                <div class="p-4 flex-1 flex flex-col">
                    <h3 class="font-serif font-bold text-slate-800 text-sm leading-snug">{{ $item->title }}</h3>
                    <p class="text-xs text-slate-500 mt-1">{{ $item->subtitle }}</p>
                    <div class="mt-2 text-amber-600 font-mono font-bold text-sm">{{ $item->price }}</div>

                    {{-- Actions --}}
                    <div class="mt-4 flex items-center gap-2 pt-3 border-t border-slate-100">
                        <a href="{{ route('admin.gallery.edit', $item) }}"
                           class="flex-1 inline-flex items-center justify-center gap-1.5 px-3 py-2 text-xs font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 rounded-lg transition-colors">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Edit
                        </a>
                        <form method="POST" action="{{ route('admin.gallery.destroy', $item) }}"
                              onsubmit="return confirm('এই স্লাইডটি মুছে ফেলতে চান?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="inline-flex items-center justify-center gap-1.5 px-3 py-2 text-xs font-semibold text-red-600 bg-red-50 hover:bg-red-100 rounded-lg transition-colors">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endif

</div>
@endsection
