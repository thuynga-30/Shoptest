<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
//Product
use App\Models\Product;

class CartController extends Controller
{
     //cart
     public function cart(){
        $cart= Cart::orderBy('created_at','ASC')->get();
        return view('main.shop.cart',[
            'title' => 'Cart'
            ],compact('cart'));
    }
    //add_cart
    public function add_cart(Product $product,Request $request){
        $quantity= $request->quantity ? $request->quantity : 1 ;
        $user_id= auth()->id();
        $cartt = Cart::where([
            'user_id'=> $user_id,
            'product_id'=> $product->id
        ])->first();
        if($cartt){
            Cart::where([
                'user_id'=> $user_id,
                'product_id'=> $product->id
            ])->increment('quantity',$quantity);
            // $cartt->update([
            //     'quantity' => $cartt->quantity + $quantity
            // ]);
            return redirect()->route('cart.cart')->with('success','Product updated to cart');

        }else{
        $data=[
            'user_id' => auth()->id(),
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price'=>$product->price,
        ];
        if (Cart::create($data)){
            return redirect()->route('cart.cart')->with('success','Product added to cart');
        }
    }
            return redirect()->back()->with('error','Product not added to cart');
    }

    //update_cart
    public function update_cart(Product $product,Request $request){
    }
    public function delete_cart(Product $product){

    }
    public function clear(){

    } 

}
