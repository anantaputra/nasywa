<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        $cart = CartController::userCart();

        return view('guest.product')->with('products', $products)->with('cart', $cart);
    }
}
