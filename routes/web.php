<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// 1. Mengarahkan domain utama (/) langsung ke Controller Portfolio
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// 2. Jika kamu tetap ingin /home bisa diakses juga (opsional)
Route::get('/home', [PortfolioController::class, 'index']);

// Halaman-halaman lainnya
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects.index');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

// Route bawaan Breeze
require __DIR__.'/auth.php';