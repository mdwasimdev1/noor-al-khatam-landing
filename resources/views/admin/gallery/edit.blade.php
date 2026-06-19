@extends('layouts.admin')

@section('title', 'Edit Gallery Image')
@section('page-title', 'Edit Gallery Image')
@section('page-subtitle', 'Update the image for this gallery item')

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

    <form method="POST" action="{{ route('admin.gallery.update', $gallery) }}" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

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
                    <p class="text-xs text-slate-500 mt-0.5">Leave empty to keep the current image</p>
                </div>
            </div>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Upload New Image</label>
                    <div class="relative group border-2 border-dashed border-slate-300 hover:border-amber-500 hover:bg-amber-50/10 rounded-xl p-6 text-center cursor-pointer transition duration-200" id="edit-upload-zone">
                        <input type="file" name="image" accept="image/*"
                               onchange="previewEditImage(this)"
                               class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                        <div class="text-amber-500 mb-2 group-hover:scale-110 transition-transform duration-200">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-8 h-8 mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                            </svg>
                        </div>
                        <div id="edit-upload-text" class="text-sm font-semibold text-slate-700">Click or drag to replace</div>
                        <div class="text-xs text-slate-400 mt-1">PNG, JPG, WEBP — max 5MB</div>
                    </div>
                    @error('image')<p class="text-xs text-red-600 mt-2">{{ $message }}</p>@enderror
                </div>
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-600">Current Image</label>
                    <div class="aspect-square rounded-xl overflow-hidden border border-slate-200 bg-slate-50 p-1">
                        <img id="edit-preview" src="{{ asset('images/' . $gallery->image) }}" alt="Gallery image"
                             class="w-full h-full object-cover rounded-lg">
                    </div>
                    <p class="text-[11px] text-slate-500 text-center">
                        <span class="font-semibold text-amber-700">{{ $gallery->image }}</span>
                    </p>
                </div>
            </div>
        </div>

        {{-- Submit --}}
        <div class="flex items-center justify-between pt-2 border-t border-slate-200/60">
            <button type="submit" form="delete-gallery-item"
                    onclick="return confirm('এই ছবিটি মুছে ফেলতে চান?')"
                    class="inline-flex items-center gap-2 px-4 py-2.5 text-xs font-semibold text-red-600 bg-red-50 hover:bg-red-100 rounded-lg transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                    Delete This Image
            </button>
            <button type="submit"
                    class="inline-flex items-center gap-2 px-6 py-3.5 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 active:scale-[0.98] text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-lg shadow-amber-500/20 transition-all duration-200 cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                Save Changes
            </button>
        </div>
    </form>
    <form id="delete-gallery-item" method="POST" action="{{ route('admin.gallery.destroy', $gallery) }}" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</div>

@push('scripts')
<script>
function previewEditImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            document.getElementById('edit-preview').src = e.target.result;
            document.getElementById('edit-upload-text').textContent = input.files[0].name;
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endpush
@endsection
