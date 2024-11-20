<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(){
        $auth = auth()->user();
        return view('main.shop.checkout',[
            'title' => 'CheckOut',
            'auth' => $auth,
        ]);
    }
    public function checkout(){
        
    }

}
