<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes - Portfolio Company
|--------------------------------------------------------------------------
|
| Route publik (GET) tidak memerlukan auth, cocok untuk ditampilkan
| di website portofolio. Route create/update/delete dilindungi
| middleware 'auth:sanctum' — sesuaikan guard dengan paket auth
| yang Anda pakai (Sanctum/Passport).
|
*/

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/{category}', [CategoryController::class, 'show']);
});

Route::prefix('articles')->group(function () {
    Route::get('/', [ArticleController::class, 'index']);
    Route::get('/{article}', [ArticleController::class, 'show']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('categories', CategoryController::class)->except(['index', 'show']);
    Route::apiResource('articles', ArticleController::class)->except(['index', 'show']);
});
