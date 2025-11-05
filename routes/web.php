<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,'index']);

Route::prefix('products')->controller(ProductController::class)->group(function () {

    Route::get('/',"index");

    Route::get('/create',"create");
    Route::get('/{id}/{category}',"show");
});


Route::prefix('admin')->controller(AdminController::class)->group(function () {
    
    Route::get('/',"index")->name('admin');
    
});
Route::prefix('admin')->controller(CategoryController::class)->group(function () {
    
    Route::get('/category/create',"index")->name('categoryCreate');
    Route::post('/category/store',"store")->name('categoryStore');
    
    
});

Auth::routes();