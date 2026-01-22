<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeoController;

// Home Route
Route::get('/', [SeoController::class, 'show'])->name('home');

// Angular Catch-All (ONLY for frontend routing if needed)
Route::get('/app/{any}', [SeoController::class, 'index'])
    ->where('any', '.*');



// SEO pages (about-us, services etc.)
Route::get('/{slug}', [SeoController::class, 'show'])
    ->where('slug', '[A-Za-z0-9\-]+')
    ->name('seo.page');
