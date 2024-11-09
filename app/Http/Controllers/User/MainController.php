<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Models\User;
//contactmail
use App\Mail\ContactMail;

class MainController extends Controller
{
    public function _construct(){
        $this->middleware('auth',['except'=> 'logout']);
    }
    public function index(){
        return view('main.shop.index',[
            'title' => 'VeganicShop'
        ]);
    }
    public function home(){
        return view('main.shop.home',[
            'title' => 'Home'
        ]);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index'); 
    }
    public function admin(){
        return view('main.admin.main',[
            'title' => 'Admin'
        ]);
       
    }
    //about
    public function about(){
        return view('main.shop.about',[
            'title' => 'About Us'
        ]);
    }
    //contact
    public function contact(){
        return view('main.shop.contact',[
            'title' => 'Contact Us'
        ]);
    }
    //contact_store
    public function contact_store(Request $request)
{
    // Validate the input data
    $request->validate([
        'email' => 'required|email',
        'content' => 'required|string|min:5',
    ]);

    $email = $request->input('email');
    $content = $request->input('content');

    
        // Send the email
        Mail::to($request->email)->send(new ContactMail($email, $content));
        return redirect()->route('home')->with('success', 'Send Success');
    
        // Handle the error if email fails to send
        return redirect()->route('contact')->with('error', 'Failed to send email. Please try again.');
    
}
    //cart
    public function cart(){
        return view('main.shop.cart',[
            'title' => 'Cart'
        ]);
    }
    //product
    public function product(){
        return view('main.shop.product',[
            'title' => 'Product'
        ]);
    }
}

