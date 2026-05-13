<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

Route::get('/services', function () {
    return Inertia::render('Services');
})->name('services');

Route::get('/test', function () {
    return Inertia::render('Test');
})->name('test');

Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::get('/heating', function () {
    return Inertia::render('Heating');
})->name('heating');

Route::get('/cooling', function () {
    return Inertia::render('Cooling');
})->name('cooling');

Route::get('/plumbing', function () {
    return Inertia::render('Plumbing');
})->name('plumbing');

Route::get('/electrical', function () {
    return Inertia::render('Electrical');
})->name('electrical');

Route::get('/indoor-air-quality', function () {
    return Inertia::render('AirQuality');
})->name('air-quality');

Route::get('/drains', function () {
    return Inertia::render('Drains');
})->name('drains');

Route::get('/commercial', function () {
    return Inertia::render('Commercial');
})->name('commercial');

Route::get('/resources', function () {
    return Inertia::render('Resources');
})->name('resources');

Route::get('/offers', function () {
    return Inertia::render('Offers');
})->name('offers');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
