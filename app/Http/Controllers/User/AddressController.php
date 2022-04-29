<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CartController;

class AddressController extends Controller
{
    public function index()
    {
        $cart = CartController::userCart();

        return view('user.detail.address', compact('cart'));
    }
}
