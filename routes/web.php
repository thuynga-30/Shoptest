<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\MainController;
use App\Http\Controllers\User\AccountController;

// Route chính của trang shop
Route::get('main/shop/index', [MainController::class, 'index'])->name('index');



// Route cần đăng nhập (dùng middleware 'auth')
Route::middleware(['auth'])->group(function () {
    Route::get('main/shop/home', [MainController::class, 'home'])->name('home');
    Route::get('/admin', [MainController::class, 'admin'])->name('admin');
    Route::get('/logout', [MainController::class, 'logout'])->name('logout');
});



    Route::get('users/log-sign/signup', [AccountController::class, 'signup'])->name('signup');
    Route::get('/verify-account/{email}',[AccountController::class, 'verify'])->name('verify');
    Route::post('users/log-sign/signup/save', [AccountController::class, 'save']);

    Route::get('users/log-sign/login', [AccountController::class, 'login'])->name('login');
    Route::post('users/log-sign/login/store', [AccountController::class, 'store']);

    Route::get('users/log-sign/forgot-password', [AccountController::class, 'forgotPass'])->name('forgot');
    Route::post('/check-forgot', [AccountController::class, 'check_forgot']);

    Route::get('/reset-password/{token}', [AccountController::class, 'resetPass'])->name('reset');
    Route::post('/check-reset/{token}', [AccountController::class, 'check_forgot']);
    
