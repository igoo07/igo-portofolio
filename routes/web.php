<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    // Arahkan ke folder layouts dan file portfolio
    return view('layouts.portfolio');
});

Route::get('/home', [PortfolioController::class, 'index'])->name('home');

// Halaman-halaman lainnya
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects.index');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');


// Route bawaan Breeze (untuk sistem login/admin nanti)
require __DIR__.'/auth.php';