<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function create(){
         return view('admin.category.create');
    }
     public function store(Request $request){
        Category::create([
            'name'=>$request->get('name')
        ]);
        return redirect()->route('categoryTable');
    }
    function table()
    {
        $category = Category::orderBy('id', 'desc')->paginate(10);
        return view('products.categoryTable', [
            'categories' => $category
        ]);
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categoryTable');
    }
    
}