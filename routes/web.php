<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use Faker\Provider\Payment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',  [WelcomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'authenticate']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
   return view('about');
});
Route::get('/contact', function () {
   return view('contact');
});
Route::post('/cart', [CartController::class, 'add']);
Route::get('/cart', [CartController::class, 'show']);
Route::delete('/cart/remove', [CartController::class, 'delete']);

Route::get('/checkout', [CheckoutController::class, 'show']);
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/category', [CategoryController::class, 'getAll']);

Route::get('/payment/{paymentGateway}', [PaymentController::class, 'show'])->name('payment.show');

Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/{slug}', [ProductController::class, 'show']);

Route::get('/thankyou', [PaymentController::class, 'thankyou'])->name('thankyou');
