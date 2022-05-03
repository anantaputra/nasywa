<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\PasswordReset;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class PasswordResetLinkController extends Controller
{
    public function index()
    {
        return view('guest.forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
        ], [
            'email.email' => 'Masukkan email yang valid',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT 
                    ? back()->with(['status' => __('Kami telah mengirimkan link untuk mereset password ke email anda.')])
                    : back()->withErrors(['email' => __('Email anda belum terdaftar')]);
    }
}
