<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;


// ================= Publik =================
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/artikel/{article:slug}', [PortfolioController::class, 'show'])->name('portfolio.show');

// ================= Admin ('auth') =================
Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('categories', CategoryController::class)
            ->parameters(['categories' => 'category']);

        Route::resource('articles', ArticleController::class)
            ->parameters(['articles' => 'article']);
    });

