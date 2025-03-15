<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductFeature;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function categories()
    {
        $categories = Category::all();
        return view('frontend.category-products',compact('categories'));
    }
    public function showProducts($slug)
    {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::where('category_id', $category->id)->get();

        return view('frontend.products', compact('category', 'products','categories'));
    }

    public function showCategories()
    {
        // Get all categories to display in the sidebar
        $categories = Category::all();

        return view('frontend.products', compact('categories'));
    }
    // public function products()
    // {
    //     $categories = Category::all();
    //     $products = Product::where('status', 1)->get();
    //     return view('frontend.products',compact('products','categories'));
    // }
    public function productsDetails($slug)
    {
        $productFeatures = ProductFeature::all();

        $product = Product::where('slug', $slug)->first();
        return view('frontend.product-details', compact('product','productFeatures'));
    }
}
