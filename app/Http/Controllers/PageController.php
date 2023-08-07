<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function frontIndex(){
        $products = Product::get();
        $banners = Banner::get();
        return view('front.index', compact('products', 'banners'));
    }

    public function profile(){
        $user = Auth::user();
        return view('front.profile', compact('user'));
    }
}
