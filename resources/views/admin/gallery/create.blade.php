@extends('layouts.admin')

@section('title', 'Add Gallery Image')
@section('page-title', 'Add Gallery Image')
@section('page-subtitle', 'Upload a new image for the gallery')

@section('content')
<div class="mx-auto max-w-3xl">
    <div class="mb-4">
        <a href="{{ route('admin.gallery.index') }}"
           class="inline-flex items-center gap-2 text-xs font-semibold text-slate-500 hover:text-amber-600 transition-colors">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Back to Gallery
        </a>
    </div>

    <form method="POST" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data" class="space-y-6">
        @csrf

        {{-- Image Upload --}}
        <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden hover:border-amber-200 transition-all duration-200">
            <div class="px-6 py-5 border-b border-slate-100 flex items-center gap-4 bg-slate-50/50">
                <div class="w-10 h-10 rounded-lg bg-amber-50 border border-amber-200/60 flex items-center justify-center text-amber-600 shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-slate-800 text-sm">Gallery Image</h3>
                    <p class="text-xs text-slate-500 mt-0.5">Upload the image for the gallery</p>
                </div>
            </div>
            <div class="p-6">
                <div class="relative group border-2 border-dashed border-slate-300 hover:border-amber-500 hover:bg-amber-50/10 rounded-xl p-8 text-center cursor-pointer transition duration-200" id="create-upload-zone">
                    <input type="file" id="image" name="image" accept="image/*" required
                           onchange="previewImage(this, 'create-preview')"
                           class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                    <div class="text-amber-500 mb-3 group-hover:scale-110 transition-transform duration-200">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-10 h-10 mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                        </svg>
                    </div>
                    <div id="create-upload-text" class="text-sm font-semibold text-slate-700">Click to upload or drag & drop</div>
                    <div class="text-xs text-slate-400 mt-1 font-medium">PNG, JPG, WEBP — max 5MB</div>
                </div>
                <img id="create-preview" src="" alt="" class="hidden mt-4 w-full max-h-48 object-contain rounded-lg border border-slate-200">
                @error('image')<p class="text-xs text-red-600 mt-2">{{ $message }}</p>@enderror
            </div>
        </div>

        {{-- Submit --}}
        <div class="flex justify-end pt-2">
            <button type="submit"
                    class="inline-flex items-center gap-2 px-6 py-3.5 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 active:scale-[0.98] text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-lg shadow-amber-500/20 transition-all duration-200 cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Add Image
            </button>
        </div>
    </form>
</div>

@push('scripts')
<script>
function previewImage(input, previewId) {
    const preview = document.getElementById(previewId);
    const textEl = input.closest('[id$="-zone"]')?.querySelector('[id$="-text"]') || input.closest('[id*="zone"]')?.querySelector('div:nth-child(2) > div');
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            preview.src = e.target.result;
            preview.classList.remove('hidden');
            if (document.getElementById('create-upload-text')) {
                document.getElementById('create-upload-text').textContent = input.files[0].name;
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endpush
@endsection
