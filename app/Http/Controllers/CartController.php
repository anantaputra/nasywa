<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public static function userCart()
    {
        if(auth()->user()){
            $item = CartItem::where('user_id', auth()->user()->id)->get();
            $cart = count($item);
        } else {
            $cart = null;
        }

        return $cart;
    }

    public static function cartItems()
    {
        return CartItem::where('user_id', auth()->user()->id)->get();
    }

    public static function addToCart($id)
    {
        $product = Product::find($id);
        $cart = CartItem::where('user_id', auth()->user()->id)->get();
        $checkItem = CartItem::where('user_id', auth()->user()->id)->where('product_id', $id)->first();

        if($checkItem){
            $checkItem->quantity + 1;
            $checkItem->save();
        } else {
            CartItem::create([
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'quantity' => 1,
                'total' => $product->price,
            ]);
        }

        return redirect()->back()->with([
            'status' => 'Produk berhasil ditambahkan ke keranjang',
            'cart' => $cart,
        ]);
    }

    public function removeFromCart($id)
    {
        $cart = CartItem::where('user_id', auth()->user()->id)->get();
        $item = CartItem::find($id);
        $item->delete();

        return redirect()->back()->with([
            'status' => 'Produk berhasil dihapus dari keranjang',
            'cart' => $cart,
        ]);
    }

    public function index()
    {
        $items = CartController::cartItems();

        $total = 0;
        
        for($i = 0; $i < count($items); $i++){
            $total += $items[$i]->price * $items[$i]->quantity;
        }

        return view('user.cart', compact('items', 'total'));
    }

}
