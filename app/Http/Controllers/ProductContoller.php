<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductContoller extends Controller
{
    
    function index(){
        return "LISTADO DE PRODUCTOS";
    }

    function create(){
        return "formulario de creacion de productos";
    }

    function show($id, $category = null){
        if ($category == null){
        return "detalle de cada producto" .$id ;
    }else{
        return "detalle de cada producto" . $id . "de la categoria " .$category;}
    }

}
