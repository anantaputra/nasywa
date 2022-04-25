<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public static function userCart(){
        if(auth()->user()){
            $cart = DB::table('cart_items')->where('user_id', auth()->user()->id)->get();
        } else {
            $cart = null;
        }

        return $cart;
    }
}
