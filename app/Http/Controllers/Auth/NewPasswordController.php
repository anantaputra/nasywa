<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewPasswordController extends Controller
{
    public function index($token)
    {
        return view('guest.new-password', compact('token'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|confirmed|min:8',
        ], [
            'email.email' => 'Masukkan email yang valid',
            'password.required' => 'Masukkan password',
            'password.confirmed' => 'Password tidak sama',
            'password.min' => 'Password minimal 8 karakter',
        ]);

        $user = User::where('email', $request->email)->first();
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('login')->with([
            'status' => 'Password berhasil diubah',
        ]);
    }
}
