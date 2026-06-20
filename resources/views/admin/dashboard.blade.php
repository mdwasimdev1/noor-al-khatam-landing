@extends('layouts.admin')

@section('title', 'Hero Section Editor')
@section('page-title', 'Hero Section Editor')
@section('page-subtitle', 'Edit the main hero content shown on your landing page')

@section('content')
<div class="mx-auto max-w-7xl py-4">
    <form
        method="POST"
        action="{{ route('admin.hero.update') }}"
        enctype="multipart/form-data"
        id="hero-form"
        class="space-y-6"
    >
        @csrf
        @method('POST')

        <!-- Hidden fields for CTA button to satisfy controller validation rules -->
        <input type="hidden" name="cta_text" value="{{ $hero->cta_text }}">
        <input type="hidden" name="cta_link" value="{{ $hero->cta_link }}">

        {{-- ── HEADINGS ── --}}
        <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden transition-all duration-200 hover:shadow-md hover:border-amber-200">
            <div class="px-6 py-5 border-b border-slate-100 flex items-center gap-4 bg-slate-50/50">
                <div class="w-10 h-10 rounded-lg bg-amber-50 border border-amber-200/60 flex items-center justify-center text-amber-600 shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-slate-800 text-sm">Main Heading</h3>
                    <p class="text-xs text-slate-500 mt-0.5">The two-line hero title displayed on the landing page</p>
                </div>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="heading_line1" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Line 1 (Normal text)</label>
                        <input
                            type="text"
                            id="heading_line1"
                            name="heading_line1"
                            value="{{ old('heading_line1', $hero->heading_line1) }}"
                            class="w-full px-4 py-3 bg-white border border-slate-200 rounded-lg text-slate-800 text-sm font-medium transition duration-200 placeholder:text-slate-400 focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/10"
                            placeholder="e.g. আংটির রাজকীয়"
                        >
                        @error('heading_line1')<div class="text-xs text-red-600 mt-1.5 font-medium">{{ $message }}</div>@enderror
                    </div>
                    <div>
                        <label for="heading_line2" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Line 2 (Gradient text)</label>
                        <input
                            type="text"
                            id="heading_line2"
                            name="heading_line2"
                            value="{{ old('heading_line2', $hero->heading_line2) }}"
                            class="w-full px-4 py-3 bg-white border border-slate-200 rounded-lg text-slate-800 text-sm font-medium transition duration-200 placeholder:text-slate-400 focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/10"
                            placeholder="e.g. আলো ধারণ করুন"
                        >
                        @error('heading_line2')<div class="text-xs text-red-600 mt-1.5 font-medium">{{ $message }}</div>@enderror
                    </div>
                </div>
            </div>
        </div>

        {{-- ── SUBHEADING ── --}}
        <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden transition-all duration-200 hover:shadow-md hover:border-amber-200">
            <div class="px-6 py-5 border-b border-slate-100 flex items-center gap-4 bg-slate-50/50">
                <div class="w-10 h-10 rounded-lg bg-amber-50 border border-amber-200/60 flex items-center justify-center text-amber-600 shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h8"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-slate-800 text-sm">Subheading / Description</h3>
                    <p class="text-xs text-slate-500 mt-0.5">The paragraph text below the main heading</p>
                </div>
            </div>
            <div class="p-6">
                <div>
                    <label for="subheading" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Description Text</label>
                    <textarea
                        id="subheading"
                        name="subheading"
                        class="w-full px-4 py-3 bg-white border border-slate-200 rounded-lg text-slate-800 text-sm font-medium transition duration-200 placeholder:text-slate-400 focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/10 resize-y"
                        placeholder="Enter the hero description..."
                        rows="4"
                    >{{ old('subheading', $hero->subheading) }}</textarea>
                    @error('subheading')<div class="text-xs text-red-600 mt-1.5 font-medium">{{ $message }}</div>@enderror
                </div>
            </div>
        </div>

        {{-- ── STATS ── --}}
        <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden transition-all duration-200 hover:shadow-md hover:border-amber-200">
            <div class="px-6 py-5 border-b border-slate-100 flex items-center gap-4 bg-slate-50/50">
                <div class="w-10 h-10 rounded-lg bg-amber-50 border border-amber-200/60 flex items-center justify-center text-amber-600 shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-slate-800 text-sm">Trust Stats</h3>
                    <p class="text-xs text-slate-500 mt-0.5">Three key statistics shown below the description</p>
                </div>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    {{-- Stat 1 --}}
                    <div class="bg-slate-50/70 border border-slate-200/60 rounded-xl p-4 space-y-4">
                        <div>
                            <label for="stat1_value" class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-500 mb-1.5">Stat 1 — Value</label>
                            <input
                                type="text"
                                id="stat1_value"
                                name="stat1_value"
                                value="{{ old('stat1_value', $hero->stat1_value) }}"
                                class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-slate-800 text-sm font-semibold transition duration-200 focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/10"
                                placeholder="১০০%"
                            >
                            @error('stat1_value')<div class="text-xs text-red-600 mt-1 font-medium">{{ $message }}</div>@enderror
                        </div>
                        <div>
                            <label for="stat1_label" class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-500 mb-1.5">Stat 1 — Label</label>
                            <input
                                type="text"
                                id="stat1_label"
                                name="stat1_label"
                                value="{{ old('stat1_label', $hero->stat1_label) }}"
                                class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-slate-800 text-xs font-medium transition duration-200 focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/10"
                                placeholder="আসল রত্ন পাথর"
                            >
                            @error('stat1_label')<div class="text-xs text-red-600 mt-1 font-medium">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    {{-- Stat 2 --}}
                    <div class="bg-slate-50/70 border border-slate-200/60 rounded-xl p-4 space-y-4">
                        <div>
                            <label for="stat2_value" class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-500 mb-1.5">Stat 2 — Value</label>
                            <input
                                type="text"
                                id="stat2_value"
                                name="stat2_value"
                                value="{{ old('stat2_value', $hero->stat2_value) }}"
                                class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-slate-800 text-sm font-semibold transition duration-200 focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/10"
                                placeholder="৯২৫"
                            >
                            @error('stat2_value')<div class="text-xs text-red-600 mt-1 font-medium">{{ $message }}</div>@enderror
                        </div>
                        <div>
                            <label for="stat2_label" class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-500 mb-1.5">Stat 2 — Label</label>
                            <input
                                type="text"
                                id="stat2_label"
                                name="stat2_label"
                                value="{{ old('stat2_label', $hero->stat2_label) }}"
                                class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-slate-800 text-xs font-medium transition duration-200 focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/10"
                                placeholder="খাঁটি রৌপ্য"
                            >
                            @error('stat2_label')<div class="text-xs text-red-600 mt-1 font-medium">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    {{-- Stat 3 --}}
                    <div class="bg-slate-50/70 border border-slate-200/60 rounded-xl p-4 space-y-4">
                        <div>
                            <label for="stat3_value" class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-500 mb-1.5">Stat 3 — Value</label>
                            <input
                                type="text"
                                id="stat3_value"
                                name="stat3_value"
                                value="{{ old('stat3_value', $hero->stat3_value) }}"
                                class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-slate-800 text-sm font-semibold transition duration-200 focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/10"
                                placeholder="ফ্রি"
                            >
                            @error('stat3_value')<div class="text-xs text-red-600 mt-1 font-medium">{{ $message }}</div>@enderror
                        </div>
                        <div>
                            <label for="stat3_label" class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-500 mb-1.5">Stat 3 — Label</label>
                            <input
                                type="text"
                                id="stat3_label"
                                name="stat3_label"
                                value="{{ old('stat3_label', $hero->stat3_label) }}"
                                class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-slate-800 text-xs font-medium transition duration-200 focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/10"
                                placeholder="শিপিং ও ডেলিভারি"
                            >
                            @error('stat3_label')<div class="text-xs text-red-600 mt-1 font-medium">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ── HERO IMAGE ── --}}
        <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="px-6 py-5 border-b border-slate-100 flex items-center gap-4 bg-slate-50/50">
                <div class="w-10 h-10 rounded-lg bg-amber-50 border border-amber-200/60 flex items-center justify-center text-amber-600 shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-slate-800 text-sm">Hero Image</h3>
                    <p class="text-xs text-slate-500 mt-0.5">The product image shown on the right side of the hero</p>
                </div>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Upload New Image</label>
                        <div class="relative group border-2 border-dashed border-slate-300 hover:border-amber-500 hover:bg-amber-50/10 rounded-xl p-6 text-center cursor-pointer transition duration-200" id="upload-zone">
                            <input
                                type="file"
                                id="hero_image"
                                name="hero_image"
                                accept="image/*"
                                onchange="handleImageUpload(this)"
                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
                            >
                            <div class="text-amber-500 mb-3 group-hover:scale-110 transition-transform duration-200">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-10 h-10 mx-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                </svg>
                            </div>
                            <div class="text-sm font-semibold text-slate-700 upload-text">Click to upload or drag & drop</div>
                            <div class="text-xs text-slate-400 mt-1 upload-hint font-medium">PNG, JPG, WEBP — max 5MB</div>
                        </div>
                        @error('hero_image')<div class="text-xs text-red-600 mt-2 font-medium">{{ $message }}</div>@enderror
                    </div>
                    <div class="space-y-2 w-full h-32">
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600">Current Image</label>
                        <div class="relative aspect-square rounded-xl overflow-hidden border border-slate-200 p-1">
                            <img
                                id="image-preview"
                                src="{{ asset('images/' . $hero->hero_image) }}"
                                alt="Current Hero Image"
                                class="w-full h-32 object-contain rounded-lg"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ── SAVE BUTTON ── --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pt-4 border-t border-slate-200/80">
            <span class="text-xs text-slate-500 font-medium">
                Last updated: <span class="font-semibold text-slate-600">{{ $hero->updated_at->diffForHumans() }}</span>
            </span>
            <button type="submit" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 bg-linear-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 active:scale-[0.98] text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-lg shadow-amber-500/20 hover:shadow-amber-500/30 transition-all duration-200 cursor-pointer" id="save-btn">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                Save Changes
            </button>
        </div>
    </form>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // ── Drag & Drop styling ──
        const zone = document.getElementById('upload-zone');
        if (zone) {
            zone.addEventListener('dragover', (e) => {
                e.preventDefault();
                zone.classList.add('border-amber-500', 'bg-amber-50/10');
            });
            zone.addEventListener('dragleave', () => {
                zone.classList.remove('border-amber-500', 'bg-amber-50/10');
            });
            zone.addEventListener('drop', () => {
                zone.classList.remove('border-amber-500', 'bg-amber-50/10');
            });
        }

        // ── Save Button Loading State ──
        const heroForm = document.getElementById('hero-form');
        if (heroForm) {
            heroForm.addEventListener('submit', function () {
                const btn = document.getElementById('save-btn');
                if (btn) {
                    btn.innerHTML = `
                        <svg class="w-4 h-4 animate-spin mr-1.5 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="animation: spin 1s linear infinite;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        Saving...
                    `;
                    btn.disabled = true;
                    btn.classList.add('opacity-75', 'cursor-not-allowed');
                }
            });
        }
    });

    // ── Image Upload Preview ──
    function handleImageUpload(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = e => {
                // Update current-image preview thumbnail
                const imgPreview = document.getElementById('image-preview');
                if (imgPreview) imgPreview.src = e.target.result;

                // Show filename in upload zone
                const zone = document.getElementById('upload-zone');
                if (zone) {
                    const textEl = zone.querySelector('.upload-text');
                    const hintEl = zone.querySelector('.upload-hint');
                    if (textEl) textEl.textContent = input.files[0].name;
                    if (hintEl) hintEl.textContent = (input.files[0].size / 1024).toFixed(0) + ' KB';
                }
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<style>
    @keyframes spin { to { transform: rotate(360deg); } }
</style>
@endpush
@endsection
