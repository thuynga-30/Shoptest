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
use App\Models\Product;


class MainController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except'=> 'logout']);
    }
    public function index(){
        $products=Product::all();
        return view('main.shop.index',[
            'title' => 'VeganicShop',
            'products'=>$products
        ]);
    }
    public function home(){
        $products=Product::all();
        return view('main.shop.home',[
            'title' => 'Home',
            'products'=>$products
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
        'name' => 'required',
        'phone' => '',
        'email' => 'required|email',
        'content' => 'required|string|min:5',
    ]);
    //name
    $name = $request->input('name');
    $phone = $request->input('phone');
    $email = $request->input('email');
    $content = $request->input('content');
    $admin='veganicshopa@gmail.com';
    
        // Send the email
        Mail::to($admin)->send(new ContactMail($name,$phone,$email, $content));
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
  
    //product_details
    public function product_details(Product $product){
        $products = Product::findOrFail($product);
        return view('main.shop.product-detail',[
            'title' => 'Product Details',
            'products' => $products
            ]);
        }

}

