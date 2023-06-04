<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::limit(11)->get();
        return view('products.list', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $products = Product::limit(4)->get();
        $categories = Category::limit(11)->get();
        return view('products.show', [
            'products' => $products,
            'product' => $product,
            'categories' => $categories,
        ]);
    }
}