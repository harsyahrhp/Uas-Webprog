<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller{
    public function addproductview()
    {
        $categories = Category::all();
        return view('addproduct', compact('categories'));
    }
    public function addproduct(Request $request)
    {
        $categories = Category::all();
        $validateCredentials = $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric|min:2',
            'photo_path' => 'required|mimes:jpeg,jpg,png',
        ]);
        $data = new Product();
        $data->photo_path=$request->photo_path;
        $data->description=$request->description;
        $data->name=$request->name;
        $data->price=$request->price;
        try {
            $data->save();
        } catch (\Exception $e) {
        }
        return redirect()->back()->with('message','Success');
    }
    public function showproduct()
    {
        $categories = Category::all();
        return view('welcomeadmin', compact('categories'));
    }
    public function deleteproduct($id){
        $data=Product::find($id);
        $data->delete();
        return redirect()->back()->with('message','Success');
    }

    public function updateview($id){
        $product=Product::find($id);
        $categories = Category::all();
        return view('updateview',compact('product','categories'));
    }

    public function updateproduct(Request $request,$id){
        $categories = Category::all();
        $validateCredentials = $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric|min:2',
            'photo_path' => 'required|mimes:jpeg,jpg,png',
        ]);
        $data=Product::find($id);
        $data->photo_path=$request->photo_path;
        $data->description=$request->description;
        $data->name=$request->name;
        $data->price=$request->price;
        $data->save();
        return redirect()->back()->with('message','Success');
    }


}
