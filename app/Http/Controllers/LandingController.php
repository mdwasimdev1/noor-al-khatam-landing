<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\GalleryItem;
use App\Models\HeroSection;
use App\Models\Settings;

class LandingController extends Controller
{
    public function index()
    {
        $hero = HeroSection::getSingleton();
        $benefits = Benefit::orderBy('sort_order')->orderBy('id')->get();
        $galleryItems = GalleryItem::latest()->get();
        $settings = Settings::getSingleton();

        return view('landing.index', compact('hero', 'benefits', 'galleryItems', 'settings'));
    }
}
