<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $cart = CartController::userCart();

        return view('guest.contact')->with('cart', $cart);
    }
}
