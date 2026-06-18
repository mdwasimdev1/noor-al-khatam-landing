<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    public function index()
    {
        $hero = HeroSection::getSingleton();
        return view('admin.dashboard', compact('hero'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'heading_line1' => ['required', 'string', 'max:200'],
            'heading_line2' => ['required', 'string', 'max:200'],
            'subheading'    => ['required', 'string', 'max:1000'],
            'cta_text'      => ['required', 'string', 'max:100'],
            'cta_link'      => ['required', 'string', 'max:255'],
            'stat1_value'   => ['required', 'string', 'max:50'],
            'stat1_label'   => ['required', 'string', 'max:100'],
            'stat2_value'   => ['required', 'string', 'max:50'],
            'stat2_label'   => ['required', 'string', 'max:100'],
            'stat3_value'   => ['required', 'string', 'max:50'],
            'stat3_label'   => ['required', 'string', 'max:100'],
            'hero_image'    => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:5120'],
        ]);

        $hero = HeroSection::getSingleton();

        // Handle image upload
        if ($request->hasFile('hero_image')) {
            $file     = $request->file('hero_image');
            $filename = 'hero_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $validated['hero_image'] = $filename;
        } else {
            unset($validated['hero_image']);
        }

        $hero->update($validated);

        return back()->with('success', 'হিরো সেকশন সফলভাবে আপডেট হয়েছে!');
    }
}
