<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function frontIndex(){
        $products = Product::get();
        return view('front.index', compact('products'));
    }
}
