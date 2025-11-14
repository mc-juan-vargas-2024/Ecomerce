<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('products.index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
    public function filterByCategory($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        $products = Product::where('category_id', $id)->get();

        return view('products.index', compact('products', 'categories', 'category'));
    }

    public function showitem($id)
    {
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }
    function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('products.create', [
            'brands' => $brands,
            'categories' => $categories,
        ]);
    }

    function show($id, $category = null)
    {
        return view('products.show');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|decimal:0,2',
            'category' => 'required|exists:category,id',
            'brand' => 'required|exists:brand,id',
        ]);

        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->category_id = $request->get('category');
        $product->brand_id = $request->get('brand');

        $product->save();
        return redirect()->route('productsTable');
    }
    function table()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('products.table', [
            'products' => $products
        ]);
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('productsTable');
    }
}