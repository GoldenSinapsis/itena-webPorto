<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;


// ================= Publik =================



Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/tentang-kami', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/harga', [App\Http\Controllers\HomeController::class,'pricing'])->name('pricing');
Route::get('/hubungi-kami', [App\Http\Controllers\HomeController::class,'contact'])->name('contact');

// Article Page (List & Detail Artikel dari Controller)
Route::get('/article', [PortfolioController::class, 'index'])->name('article.index');
Route::get('/article/{article:slug}', [PortfolioController::class, 'show'])->name('article.show');



// ================= Admin ('auth') =================
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login-proses');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
        // Dashboard Admin
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // CRUD Categories
        Route::resource('categories', CategoryController::class)
            ->parameters(['categories' => 'category']);

        // CRUD Articles
        Route::resource('articles', ArticleController::class)
            ->parameters(['articles' => 'article']);

        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('logout');

    });
