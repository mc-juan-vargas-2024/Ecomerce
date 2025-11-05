<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
         return view('admin.category.create');
    }
     public function store(Request $request){
        Category::create([
            'name'=>$request->get('name')
        ]);
    }
}