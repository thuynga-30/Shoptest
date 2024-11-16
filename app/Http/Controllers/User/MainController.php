<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail; // Import Mail để gửi email
use App\Models\User;
//contactmail
use App\Mail\ContactMail;
use App\Models\Product;
use Illuminate\Support\Facades\Mail as FacadesMail;

class MainController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except'=> ['index','about','product','logout']]);
    }
    public function index(){
       
        return view('main.shop.index',[
            'title' => 'VeganicShop',
           
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
        return redirect()->route('index')->with('success', 'Send Success');
    
        // Handle the error if email fails to send
        return redirect()->route('contact')->with('error', 'Failed to send email. Please try again.');
    
}


}