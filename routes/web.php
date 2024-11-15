<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\MainController;
use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\CategoryController;
use App\Http\Controllers\User\CartController;

// Route chính của trang shop
Route::get('main/shop/index', [MainController::class, 'index'])->name('index');
Route::get('users/log-sign/signup', [AccountController::class, 'signup'])->name('signup');
Route::get('/verify-account/{email}',[AccountController::class, 'verify'])->name('verify');
Route::post('users/log-sign/signup/save', [AccountController::class, 'save']);

Route::get('users/log-sign/login', [AccountController::class, 'login'])->name('login');
Route::post('users/log-sign/login/store', [AccountController::class, 'store']);

Route::get('users/log-sign/forgot-password', [AccountController::class, 'forgotPass'])->name('forgot');
Route::post('/check-forgot', [AccountController::class, 'check_forgot']);

Route::get('/reset-password/{token}', [AccountController::class, 'resetPass'])->name('reset');
Route::post('/check-reset/{token}', [AccountController::class, 'Check_resetPass']);


// Route cần đăng nhập (dùng middleware 'auth')
Route::middleware(['auth'])->group(function () {
  //  Route::get('main/shop/home', [MainController::class, 'home'])->name('home');
    Route::get('/admin', [MainController::class, 'admin'])->name('admin');
    Route::get('/logout', [MainController::class, 'logout'])->name('logout');
});
   
    // about
    Route::get('/about', [MainController::class, 'about'])->name('about');
    //contact
    Route::get('/contact', [MainController::class, 'contact'])->name('contact');
    Route::post('/contact/store', [MainController::class, 'contact_store'])->name('contact-store');
    //product
    Route::get('/product', [ProductController::class, 'product'])->name('product');
    Route::get('/product/{product}', [ProductController::class, 'product_details'])->name('details');
    //cart
    //group prefix
    Route::prefix('cart')->group(function () {
        Route::get('/cart', [CartController::class, 'cart'])->name('cart.cart');
        Route::get('/cart/add/{product}', [CartController::class, 'add_cart'])->name('cart.add');
        Route::get('/cart/delete/{product}', [CartController::class, 'delete_cart'])->name('cart.delete');
        Route::get('/cart/update/{product}', [CartController::class, 'update_cart'])->name('cart.update');
        Route::get('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
        // Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    });

  
        


    
    
