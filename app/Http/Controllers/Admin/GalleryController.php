<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index()
    {
        $items = GalleryItem::latest()->get();

        return view('admin.gallery.index', compact('items'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:5120'],
        ]);

        $file = $request->file('image');
        $filename = 'gallery_'.Str::uuid().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images'), $filename);
        $validated['image'] = $filename;

        GalleryItem::create($validated);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'গ্যালারি ছবি সফলভাবে যুক্ত হয়েছে!');
    }

    public function edit(GalleryItem $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, GalleryItem $gallery)
    {
        $validated = $request->validate([
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:5120'],
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it's not a stock image
            $oldPath = public_path('images/'.$gallery->image);
            if (file_exists($oldPath) && str_starts_with($gallery->image, 'gallery_')) {
                @unlink($oldPath);
            }
            $file = $request->file('image');
            $filename = 'gallery_'.Str::uuid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $validated['image'] = $filename;
        } else {
            unset($validated['image']);
        }

        $gallery->update($validated);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'গ্যালারি ছবি সফলভাবে আপডেট হয়েছে!');
    }

    public function destroy(GalleryItem $gallery)
    {
        // Delete image file only if it's an uploaded gallery image
        $path = public_path('images/'.$gallery->image);
        if (file_exists($path) && str_starts_with($gallery->image, 'gallery_')) {
            @unlink($path);
        }
        $gallery->delete();

        return redirect()->route('admin.gallery.index')
            ->with('success', 'গ্যালারি ছবি সফলভাবে মুছে ফেলা হয়েছে!');
    }
}
