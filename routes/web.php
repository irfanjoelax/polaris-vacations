<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('/pages/{slug}', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/book-now/{slug}', [App\Http\Controllers\BookNowController::class, 'index']);
Route::post('/book-now/{slug}', [App\Http\Controllers\BookNowController::class, 'create']);

Route::get('/about-us', function () {
    return view('pages.about-us');
});

Route::get('/contact-us', function () {
    return view('pages.contact-us');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
