<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    
    public function product(){
        return view('main.shop.product',[
            'title' => 'Product'
        ]);
    }
    public function product_details(Product $product){
        $randomProducts = Product::inRandomOrder()->limit(4)->get();
        return view('main.shop.product-detail',[
            'title' => 'Product Details',
            'product' => $product,
            'randomProducts' => $randomProducts
            ]);
        }
    

    //showrandom product
    public function showRandomProduct(){
        
        return view('main.shop.product-detail',[
            'title' => 'Product Details',
           
        ]);
    }
    // public function showDetail($id){
    //     $product = Product::findOrFail($id);
    //     return view('main.shop.product-detail', compact('product'));
    //     }
}
