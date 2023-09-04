<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $filterCategorySlug = $request->get('category');

        $categories = Category::take(11)->get();

        $category = Category::where('slug', $filterCategorySlug)->first();

        if (@$category) {
            //defining realtion between category and product from the products() funvtion in the Category Controller
            $products = $category->products()->orderBy('created_at', 'desc')->get();
        } else {

            $products = Product::orderBy('created_at', 'desc')->get();
        }

        // dd($products->imageUrl);
        return view('welcome', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
