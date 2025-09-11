<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('products', function () {
    return "LISTADO DE PRODUCTOS";
});
Route::get('products/create', function () {
    return "formulario de creacion de productos";
});
Route::get('products/{id}/{category}', function ($id, $category = null) {
    if ($category == null){
        return "detalle de cada producto" .$id ;
    }
    return "detalle de cada producto" . $id . "de la categoria " .$category;
});