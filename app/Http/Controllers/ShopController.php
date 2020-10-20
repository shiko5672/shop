<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function home()
    {
        return view('layout\index');
    }

   public function shop(){
        return view('layout/shop');
   }
   public function blog(){

        return view('layout/blog');
   }
    public function contact(){

        return view('layout/contact');
    }
    public function about(){

        return view('layout/about');
    }
    public function checkout(){

        return view('layout/checkout');
    }
    public function details (){

        return view('layout/shop-details');
    }
    public function cart (){

        return view('layout/shopping-cart');
    }
    public function login (){

        return view('layout/login');
    }
    public function signup (){

        return view('layout/sign-up');
    }

}
