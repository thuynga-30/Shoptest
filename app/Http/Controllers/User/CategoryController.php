<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categroy;
class CategoryController extends Controller
{
    public function index(){
        $cats = Category::orderBy('id','DESC')->paginate(50);
    return view('user.category',compact('cats'));
    }
}
