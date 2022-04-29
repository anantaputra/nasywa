<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\VerifiedController;
use App\Http\Controllers\Auth\RegisteredController;
use App\Http\Controllers\Auth\AuthenticatedController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\User\AddressController;
use App\Http\Controllers\User\ChangePasswordController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\PurchaseController;
use App\Http\Controllers\User\VerificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])
            ->name('home');
Route::get('product', [ProductController::class, 'index'])
            ->name('product');
Route::get('contact', [ContactController::class, 'index'])
            ->name('contact');
Route::get('help', [HelpController::class, 'index'])
            ->name('help');

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedController::class, 'index'])
                ->name('login');
    Route::get('register', [RegisteredController::class, 'index'])
                ->name('register');
    Route::get('forgot-password', [PasswordResetLinkController::class, 'index'])
                ->name('password.request');
    Route::post('login', [AuthenticatedController::class, 'store'])
                ->name('login.store');
    Route::post('register', [RegisteredController::class, 'store'])
                ->name('register.store');
    Route::get('google', [GoogleAuthenticatedController::class, 'store'])
                ->name('google');
});

Route::middleware('auth')->group(function () {
    Route::get('verify/{hash}', [VerifiedController::class, 'verify'])
                ->middleware('signed', 'throttle:6,1')
                ->name('verify');
    Route::get('cart', [CartController::class, 'index'])
                ->name('cart');
    Route::get('logout', [AuthenticatedController::class, 'destroy'])
                ->name('logout');
    Route::prefix('user')->group(function(){
        Route::get('profile', [ProfileController::class, 'index'])
                ->name('user.profile');
        Route::get('address', [AddressController::class, 'index'])
                ->name('user.address');
        Route::get('change-password', [ChangePasswordController::class, 'index'])
                ->name('user.change-password');
        Route::get('purchase', [PurchaseController::class, 'index'])
                ->name('user.purchase');
        Route::post('profile-update', [ProfileController::class, 'update'])
                ->name('user.profile-update');
        Route::get('email-verification', [VerificationController::class, 'email'])
                ->name('user.email-verify');
    });
});

Route::get('apa', function(){
    $nama = 'Ananta Putra Starna';
    $explode = explode(' ', $nama);
    $length = count($explode);
    $lastname = $explode[$length - 1];
    $firstname = '';
    for($i = 0; $i < $length - 1; $i++){
        $firstname .= $explode[$i] . ' ';
    }
    echo $firstname;
});