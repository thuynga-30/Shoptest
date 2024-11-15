<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//Paginator
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        view()->composer('*',function($view){
            $cats=Category::orderBy('name','ASC')->get();
            $products = Product::orderBy('id','ASC')->get(); 
            $view->with(compact('cats','products'));

        });
    }
}
