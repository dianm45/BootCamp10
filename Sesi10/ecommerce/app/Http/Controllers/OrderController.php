<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function cart()
    {
        $cart = session()->get('cart', []);

        return view('cart.index', compact('cart'));
    }

    public function checkout()
    {
        return view('checkout.index');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart')
            ->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function processCheckout(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'nullable|email|max:255',
            'shipping_address' => 'required|string',
        ]);

        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart')
                ->with('error', 'Keranjang masih kosong.');
        }

        $total = collect($cart)->sum(
            fn ($item) => $item['price'] * $item['quantity']
        );

        Order::create([
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'shipping_address' => $request->shipping_address,
            'total_price' => $total,
            'status' => 'pending',
        ]);

        session()->forget('cart');

        return redirect()->route('products.index')
            ->with('success', 'Pesanan berhasil dibuat!');
    }
}
