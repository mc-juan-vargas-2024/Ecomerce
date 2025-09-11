<?php

use App\Http\Controllers\ProductContoller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::profix("products")->controller(ProductContoller::class)->group(function (){
    Route::get('products',"index");
    Route::get('products/create', "create");
    Route::get('products/{id}/{category}', "show");
});