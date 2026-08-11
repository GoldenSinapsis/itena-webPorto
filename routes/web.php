<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;


// ================= Publik =================

// Landing Page
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Article Page (List & Detail Artikel dari Controller)
Route::get('/article', [PortfolioController::class, 'index'])->name('article.index');
Route::get('/article/{article:slug}', [PortfolioController::class, 'show'])->name('article.show');

// Pricing Page
Route::get('/pricing', function () {
    return view('pages.pricing');
})->name('pricing');

// Contact Page
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


// ================= Admin ('auth') =================

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        // Dashboard Admin
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // CRUD Categories
        Route::resource('categories', CategoryController::class)
            ->parameters(['categories' => 'category']);

        // CRUD Articles
        Route::resource('articles', ArticleController::class)
            ->parameters(['articles' => 'article']);
    });