<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    $products = Product::latest()->take(4)->get();

    return view('home.index', compact('products'));
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