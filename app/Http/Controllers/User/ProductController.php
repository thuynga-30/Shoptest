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
    public function product_details(Product $product) {
        $randomProducts = Product::inRandomOrder()->limit(4)->get();
        return view('main.shop.product-detail', [
            'title' => 'Product Details',
            'product' => $product, // Dữ liệu của sản phẩm
            'randomProducts' => $randomProducts
        ]);
    }
    
}
