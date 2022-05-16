<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.product', compact('products'));
    }

    public function create()
    {
        return view('admin.product.add-product');
    }
}
