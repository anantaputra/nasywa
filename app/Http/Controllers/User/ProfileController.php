<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CartController;

class ProfileController extends Controller
{
    public function index()
    {
        $cart = CartController::userCart();

        return view('user.detail.profile')->with('cart', $cart);
    }

    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);
        
        $name = $request->name;
        $explode = explode(' ', $name);
        $length = count($explode);
        $lastname = $explode[$length - 1];
        $firstname = '';
        for ($i = 0; $i < $length - 1; $i++) {
            if ($i == $length - 2){
                $firstname .= $explode[$i];
            } else {
                $firstname .= $explode[$i] . ' ';
            }
        }

        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->save();

        return redirect()->route('user.profile');
    }
}
