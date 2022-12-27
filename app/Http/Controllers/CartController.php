<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addcart(Request $request, $id){
        $user=auth()->user();
        $product=product::find($id);
        $cart = new cart;
        $cart->user_id=$user->id;
        $cart->product_id=$product->id;
        $cart->quantity = $request->quantity;
        $cart->save();
        return redirect()->back()->with('message','Product has been deleted');
    }

    public function showcart(){
        $carts = Cart::all();
        $categories = Category::all();
        return view('showcart',compact('categories','carts'));
    }
    public function deletecart($id){
        $data=Cart::find($id);
        $data->delete();
        return redirect()->back()->with('message','Success');
    }
    public function confirmorder(Request $request){
        $user=auth()->user();
        $userid=$user->id;
        $order=new transaction;
        $order->user_id=$userid;
        $order->save();
        DB::table('carts')->where('user_id',$userid)->delete();
        return redirect()->back()->with('message','Purchase Successful');
    }
    public function showorder($id){
        $data=Transaction::find($id);
        $categories = Category::all();
        return view('history',compact('data','categories'));
    }
}
