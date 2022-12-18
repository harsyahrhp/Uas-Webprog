<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }

    public function categoryProduct($id)
    {
        $categories = Category::all();
        $products = Category::find($id)->products;
        $categoryName = Category::find($id)->name;
        return view('product_category', compact('categories', 'categoryName', 'products'));
    }
}
