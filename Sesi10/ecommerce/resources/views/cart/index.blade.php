
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - DianStore</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 30px;
            background: #f8fafc;
            color: #1f2937;
        }
        h1 {
            color: #166534;
        }
        .cart {
            max-width: 800px;
            margin-top: 25px;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px #00000010;
        }
        .item {
            padding: 15px 0;
            border-bottom: 1px solid #e5e7eb;
        }
        .price {
            color: #15803d;
            font-weight: bold;
        }
        a {
            color: #15803d;
            text-decoration: none;
        }
        .button {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 20px;
            background: #15803d;
            color: white;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <a href="/">← Kembali ke Beranda</a>

    <h1>Keranjang Belanja</h1>

    <div class="cart">
        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        @forelse ($cart as $id => $item)
            <div class="item">
                <h2>{{ $item['name'] }}</h2>
                <p>Harga: Rp {{ number_format($item['price'], 0, ',', '.') }}</p>
                <p>Jumlah: {{ $item['quantity'] }}</p>
                <p class="price">
                    Subtotal: Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}
                </p>
            </div>
        @empty
            <p>Keranjang belanjamu masih kosong.</p>
            <p>Silakan pilih produk yang ingin kamu beli.</p>
        @endforelse

        @if (count($cart) > 0)
            <h3>
                Total: Rp {{ number_format(collect($cart)->sum(fn ($item) => $item['price'] * $item['quantity']), 0, ',', '.') }}
            </h3>

            <a href="/products" class="button">Lanjut Belanja</a>
            <a href="/checkout" class="button">Checkout</a>
        @else
            <a href="/products" class="button">Lihat Produk</a>
        @endif
    </div>
</body>
</html>
