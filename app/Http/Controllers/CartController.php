<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public static function userCart(){
        if(auth()->user()){
            $item = CartItem::where('user_id', auth()->user()->id)->get();
            $cart = count($item);
        } else {
            $cart = null;
        }

        return $cart;
    }
}
