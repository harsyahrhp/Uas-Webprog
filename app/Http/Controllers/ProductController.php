<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        $products = Product::where('category_id', $id)->paginate(10)->withQueryString();
        $categoryName = Category::find($id)->name;
        return view('product_category', compact('categories', 'categoryName', 'products'));
    }

    public function productDetail($id)
    {
        $categories = Category::all();
        $product = Product::find($id);

        return view('product_detail', compact('categories', 'product'));
    }

    public function purchase($id, Request $request)
    {
        $validateCredentials = $request->validate([
            'qty' => 'required|numeric|min:1',
        ]);
        $product = Product::find($id);
        $cart = new Cart();
        $cart->user_id = auth()->user()->id;
        $cart->product_id = $id;
        $cart->quantity = $request->qty;
        try {
            $cart->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['alert' => 'Failed to add to cart']);
        }
        return redirect()->back()->with('alert', 'Added to cart');
    }
}
