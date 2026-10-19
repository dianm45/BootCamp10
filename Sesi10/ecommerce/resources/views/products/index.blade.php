<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk - DianStore</title>
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
        a {
            color: #15803d;
            text-decoration: none;
        }
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 25px;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 8px #00000010;
        }
        .price {
            color: #15803d;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <a href="/">← Kembali ke Beranda</a>
    <h1>Daftar Produk DianStore</h1>
    <p>Temukan produk yang kamu butuhkan.</p>

    <div class="products">
        @forelse ($products as $product)
            <div class="card">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description ?? 'Tidak ada deskripsi.' }}</p>
                <p class="price">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </p>
                <p>Stok: {{ $product->stock }}</p>
                <p>Kategori: {{ $product->category ?? '-' }}</p>
                
<form action="{{ route('cart.add', $product->id) }}" method="POST">
    @csrf
    <button type="submit">Tambah ke Keranjang</button>
</form>

            </div>
        @empty
            <p>Belum ada produk. Silakan tambahkan data produk ke database.</p>
        @endforelse
    </div>
</body>
</html>
