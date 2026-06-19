<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BenefitController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::post('/orders', [OrderController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('orders.store');

// Admin Auth
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Protected Admin Routes
    Route::middleware(AdminMiddleware::class)->group(function () {
        Route::get('/', [HeroSectionController::class, 'index'])->name('dashboard');
        Route::post('/hero', [HeroSectionController::class, 'update'])->name('hero.update');

        // Gallery CRUD
        Route::resource('gallery', GalleryController::class)->except('show');

        // Benefits CRUD
        Route::resource('benefits', BenefitController::class)->except('show');

        // Order Management
        Route::resource('orders', AdminOrderController::class)->only(['index', 'show', 'update', 'destroy']);
    });
});
