<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Variant;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.product.add-product', compact('categories'));
    }

    public function getVariantBy(Request $request)
    {
        $variants = Variant::where('category_id', $request->category)->get();

        return response()->json($variants);
    }

    public function store(Request $request)
    {
        $request->validate([

        ]);
    }
}
