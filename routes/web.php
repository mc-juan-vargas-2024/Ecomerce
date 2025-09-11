<?php

use App\Http\Controllers\ProductContoller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('products',[ProductContoller::class, "index"]);


Route::get('products/create',[ProductContoller::class, "create"] );

Route::get('products/{id}/{category}',[ProductContoller::class, "show"]);