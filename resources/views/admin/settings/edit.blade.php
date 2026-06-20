@extends('layouts.admin')

@section('title', 'Manage Price & Discount')
@section('page-title', 'Price & Discount')
@section('page-subtitle', 'Manage product price and discount settings')

@section('content')
<div class="mx-auto max-w-3xl">
    <div class="mb-4">
        <a href="{{ route('admin.dashboard') }}"
           class="inline-flex items-center gap-2 text-xs font-semibold text-slate-500 hover:text-amber-600 transition-colors">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Back to Dashboard
        </a>
    </div>

    @if(session('success'))
        <div class="mb-6 rounded-xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-semibold text-emerald-800">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.settings.update') }}" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden hover:border-amber-200 transition-all duration-200">
            <div class="px-6 py-5 border-b border-slate-100 flex items-center gap-4 bg-slate-50/50">
                <div class="w-10 h-10 rounded-lg bg-amber-50 border border-amber-200/60 flex items-center justify-center text-amber-600 shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8v8"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-slate-800 text-sm">Price & Discount</h3>
                    <p class="text-xs text-slate-500 mt-0.5">Update product pricing and discount</p>
                </div>
            </div>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="price" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Current Price (৳)</label>
                                <input type="number" id="price" name="price" value="{{ old('price', $settings->price) }}" required min="0"
                                       class="w-full px-4 py-3 bg-white border border-slate-200 rounded-lg text-slate-800 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/10 transition">
                                @error('price')<p class="text-xs text-red-600 mt-1">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label for="discount" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Original Price (৳)</label>
                                <input type="number" id="discount" name="discount" value="{{ old('discount', $settings->discount) }}" required min="0"
                                       class="w-full px-4 py-3 bg-white border border-slate-200 rounded-lg text-slate-800 text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/10 transition">
                                @error('discount')<p class="text-xs text-red-600 mt-1">{{ $message }}</p>@enderror
                            </div>
                        </div>
        </div>

        <div class="flex justify-end pt-2">
            <button type="submit"
                    class="inline-flex items-center gap-2 px-6 py-3.5 bg-linear-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 active:scale-[0.98] text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-lg shadow-amber-500/20 transition-all duration-200 cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                Save Changes
            </button>
        </div>
    </form>
</div>
@endsection
