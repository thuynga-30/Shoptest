<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
     //cart
     public function cart(){
        return view('main.shop.cart',[
            'title' => 'Cart'
        ]);
    }
}
