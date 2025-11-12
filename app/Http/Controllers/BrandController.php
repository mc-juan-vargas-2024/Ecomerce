<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    function create()
    {
        return view('admin.brand.create');
    }
    public function store(Request $request)
    {
        Brand::create([
            'name' => $request->get('name')
        ]);
        return redirect()->route('brandTable');
    }
    function table()
    {
        $brand = Brand::orderBy('id', 'desc')->paginate(10);
        return view('products.brandTable', [
            'brands' => $brand
        ]);
    }
    public function destroy($id)
    {
        $category = Brand::find($id);
        $category->delete();
        return redirect()->route('brandTable');
    }
}