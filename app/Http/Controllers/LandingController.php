<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $hero = HeroSection::getSingleton();
        return view('landing.index', compact('hero'));
    }
}
