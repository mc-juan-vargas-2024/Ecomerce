<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('products/{id}/{category}', [ProductController::class, "show"]);

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, "index"])->name('adminIndex');
    Route::get('/products/create', [ProductController::class, "create"])->name('prodad uctsCreate');
    Route::get('/category', [CategoryController::class, "create"])->name('categoryCreate');
    Route::post('/category/store', [CategoryController::class, "store"])->name('categoryStore');
    Route::post('/product/store', [ProductController::class, "store"])->name('productStore');
    Route::get('/products', [ProductController::class, "table"])->name('productTable');
});

Auth::routes();