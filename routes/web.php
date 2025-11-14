<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('productos');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('products/{id}/{category}', [ProductController::class, "show"]);

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, "index"])->name('adminIndex');
    Route::get('/products/create', [ProductController::class, "create"])->name('productsCreate');
    Route::get('/category/create', [CategoryController::class, "create"])->name('categoryCreate');
    Route::post('/category/store', [CategoryController::class, "store"])->name('categoryStore');
    Route::post('/product/store', [ProductController::class, "store"])->name('productStore');
    Route::get('/products', [ProductController::class, "table"])->name('productsTable');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('productsDestroy');
    Route::get('/category', [CategoryController::class, "table"])->name('categoryTable');
    Route::delete('/categtory/{id}', [CategoryController::class, 'destroy'])->name('categoryDestroy');
    Route::get('/brand', [BrandController::class, "table"])->name('brandTable');
    Route::get('/brand/create', [BrandController::class, "create"])->name('brandCreate');
    Route::delete('/brand/{id}', [BrandController::class, 'destroy'])->name('brandDestroy');
    Route::post('/brand/store', [BrandController::class, "store"])->name('brandStore');
    
    
});
Route::get('/products/{id}', [ProductController::class, 'showitem'])->name('productShow');
Route::get('/categories/{id}', [ProductController::class, 'filterByCategory'])->name('categoryShow');

Auth::routes();