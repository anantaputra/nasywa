<?php

use App\Http\Controllers\Auth\AuthenticatedController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('product', [ProductController::class, 'index'])->name('product');
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::get('help', [HelpController::class, 'index'])->name('help');
    Route::get('login', [AuthenticatedController::class, 'index'])->name('login');
    Route::get('register', [RegisteredController::class, 'index'])->name('register');
    Route::get('forgot-password', [PasswordResetLinkController::class, 'index'])->name('forgot-password');
    Route::post('login', [AuthenticatedController::class, 'store'])->name('login.store');
    Route::post('register', [RegisteredController::class, 'store'])->name('register.store');
});

Route::middleware('auth')->group(function () {
    Route::get('cart', [CartController::class, 'index'])->name('cart');
    Route::get('logout', [AuthenticatedController::class, 'destroy'])->name('logout');
});