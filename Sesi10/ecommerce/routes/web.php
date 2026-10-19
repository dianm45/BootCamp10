<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/cart', [OrderController::class, 'cart'])
    ->name('cart');

Route::get('/checkout', [OrderController::class, 'checkout'])
    ->name('checkout');

Route::post('/cart/add/{id}', [OrderController::class, 'addToCart'])
    ->name('cart.add');

Route::post('/checkout', [OrderController::class, 'processCheckout'])
    ->name('checkout.process');