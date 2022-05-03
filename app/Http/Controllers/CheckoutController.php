<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $items = CartController::cartItems();

        return view('user.checkout', compact('items'));
    }
}
