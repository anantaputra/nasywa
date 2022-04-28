<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Notifications\NewUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisteredController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['nullable', 'string', 'max:255'],
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $checkemail = User::where('email', $request->email)->first();

        if ($checkemail) {
            return redirect()->back()->with('error', 'Email already exists');
        }

        $lastnumber = User::orderBy('id', 'desc')->first();
        if ($lastnumber) {
            $lastnumber = $lastnumber->id;
            $lastnumber = substr($lastnumber, -4);
            $lastnumber = (int)$lastnumber;
            $lastnumber++;
            $lastnumber = str_pad($lastnumber, 4, '0', STR_PAD_LEFT);
        } else {
            $lastnumber = '0001';
        }

        $userID = 'USR' . $lastnumber;

        $user = new User();
        $user->id = $userID;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $user->notify(new NewUser($user));

        Auth::login($user);


        return redirect('/login');
    }
}
