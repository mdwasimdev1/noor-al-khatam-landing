<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\LandingController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Admin Auth
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Protected Admin Routes
    Route::middleware(AdminMiddleware::class)->group(function () {
        Route::get('/', [HeroSectionController::class, 'index'])->name('dashboard');
        Route::post('/hero', [HeroSectionController::class, 'update'])->name('hero.update');
    });
});
