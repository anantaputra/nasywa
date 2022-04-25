<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('name', 'asc')->take(3)->get();

        $cart = CartController::userCart();

        return view('home')->with('products', $products)->with('cart', $cart);
    }
}
