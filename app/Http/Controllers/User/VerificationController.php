<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\NewUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;

class VerificationController extends Controller
{
    public function email()
    {
        $cart = CartController::userCart();

        $user = User::find(Auth::user()->id);

        $user->notify(new NewUser($user));

        return view('user.detail.email-verify', compact('cart'));
    }
}
