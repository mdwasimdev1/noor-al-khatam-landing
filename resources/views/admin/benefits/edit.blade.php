@extends('layouts.admin')

@section('title', 'Edit Benefit')
@section('page-title', 'Edit Benefit')
@section('page-subtitle', 'Update or remove this landing-page benefit')

@section('content')
<div class="mx-auto max-w-2xl">
    <a href="{{ route('admin.benefits.index') }}"
       class="mb-4 inline-flex items-center gap-2 text-xs font-semibold text-slate-500 hover:text-amber-600 transition-colors">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
        Back to Benefits
    </a>

    <form method="POST" action="{{ route('admin.benefits.update', $benefit) }}" class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
        @csrf
        @method('PUT')

        <div class="px-6 py-5 border-b border-slate-100 bg-slate-50/50">
            <h3 class="font-semibold text-slate-800 text-sm">Benefit Details</h3>
            <p class="text-xs text-slate-500 mt-1">Changes appear on the landing page immediately.</p>
        </div>

        <div class="p-6 space-y-5">
            <div>
                <label for="text" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Benefit Text *</label>
                <textarea id="text" name="text" rows="3" required maxlength="300"
                          class="w-full px-4 py-3 bg-white border border-slate-200 rounded-lg text-slate-800 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/10 transition">{{ old('text', $benefit->text) }}</textarea>
                @error('text')<p class="text-xs text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label for="color" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Dot Color *</label>
                    <select id="color" name="color" required
                            class="w-full px-4 py-3 bg-white border border-slate-200 rounded-lg text-slate-700 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/10 transition">
                        @foreach($colorOptions as $color)
                            <option value="{{ $color }}" {{ old('color', $benefit->color) === $color ? 'selected' : '' }}>
                                {{ str($color)->after('bg-')->replace('-', ' ')->title() }}
                            </option>
                        @endforeach
                    </select>
                    @error('color')<p class="text-xs text-red-600 mt-1">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="sort_order" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Display Order</label>
                    <input id="sort_order" name="sort_order" type="number" min="0" value="{{ old('sort_order', $benefit->sort_order) }}"
                           class="w-full px-4 py-3 bg-white border border-slate-200 rounded-lg text-slate-800 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/10 transition">
                    @error('sort_order')<p class="text-xs text-red-600 mt-1">{{ $message }}</p>@enderror
                </div>
            </div>
        </div>

        <div class="px-6 py-4 border-t border-slate-100 bg-slate-50/50 flex items-center justify-between">
            <button type="submit" form="delete-benefit"
                    onclick="return confirm('এই বেনিফিটটি মুছে ফেলতে চান?')"
                    class="px-4 py-2.5 text-xs font-semibold text-red-600 bg-red-50 hover:bg-red-100 rounded-lg transition-colors">
                Delete
            </button>
            <button type="submit"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-lg shadow-amber-500/20 transition-all">
                Save Changes
            </button>
        </div>
    </form>

    <form id="delete-benefit" method="POST" action="{{ route('admin.benefits.destroy', $benefit) }}" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</div>
@endsection
