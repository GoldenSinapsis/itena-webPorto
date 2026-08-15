<?php

use App\Http\Controllers\Admin\ArticleController; // Diganti ke ArticleController
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// ================= Halaman Publik (Frontend Fenya) =================
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/tentang-kami', [HomeController::class, 'about'])->name('about');
Route::get('/harga', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/hubungi-kami', [HomeController::class, 'contact'])->name('contact');

// Submit form kontak
Route::post('/hubungi-kami', [ContactController::class, 'store'])->name('contact.store');

// Artikel / Portofolio publik
Route::get('/articles', [PortfolioController::class, 'index'])->name('articles.index');
Route::get('/articles/{article:slug}', [PortfolioController::class, 'show'])->name('articles.show');

// ================= Autentikasi Admin =================
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login-proses');
});

// ================= Area Admin (terproteksi 'auth') =================
Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('categories', CategoryController::class)
            ->parameters(['categories' => 'category']);

        // Resource Articles
        Route::resource('articles', ArticleController::class)
            ->parameters(['articles' => 'article']);

        // Pesan masuk dari form kontak publik
        Route::resource('messages', ContactMessageController::class)
            ->parameters(['messages' => 'message'])
            ->only(['index', 'show', 'destroy']);

        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });