<?php

use App\Http\Controllers\ProductContoller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("/products")->controller(ProductContoller::class)->group(function (){
    Route::get('/',"index");
    Route::get('/create', 'create');
    Route::get('/{id}/{category}', 'show');
});