<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public static function userCart(){
        if(auth()->user()){
            $cart = CartItem::where('user_id', auth()->user()->id)->get();
        } else {
            $cart = null;
        }

        return $cart;
    }
}
