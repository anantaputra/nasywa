<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifiedController extends Controller
{
    public function verify($hash)
    {
        $email = decrypt($hash);

        $user = User::where('email', $email)->first();

        if (!is_null($user->email_verified_at)){
            return redirect('/');
        }
        
        if ($user) {
            $user->email_verified_at = now();
            $user->save();
        }

        return redirect('/')->with('success', 'Your email has been verified. You can now login.');
    }
}
