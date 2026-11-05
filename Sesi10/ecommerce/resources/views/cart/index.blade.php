<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - DianStore</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    @include('components.navbar')

    <main class="container py-4">
        <a href="/" class="text-decoration-none">
            &larr; Kembali ke Beranda
        </a>

        <h1 class="text-success fw-bold mt-3 mb-4">
            Keranjang Belanja
        </h1>

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @forelse ($cart as $id => $item)
                    <div class="border-bottom py-3">
                        <h4 class="fw-bold">{{ $item['name'] }}</h4>

                        <p class="mb-2">
                            Harga: Rp {{ number_format($item['price'], 0, ',', '.') }}
                        </p>

                        <p class="mb-2">
                            Jumlah: {{ $item['quantity'] }}
                        </p>

                        <p class="text-success fw-bold mb-0">
                            Subtotal: Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}
                        </p>
                    </div>
                @empty
                    <div class="text-center py-4">
                        <h5>Keranjang belanjamu masih kosong.</h5>
                        <p class="text-muted">
                            Silakan pilih produk yang ingin kamu beli.
                        </p>

                        <a href="{{ route('products.index') }}" class="btn btn-primary">
                            Lihat Produk
                        </a>
                    </div>
                @endforelse

                @if (count($cart) > 0)
                    <div class="mt-4">
                        <h4 class="fw-bold">
                            Total: Rp {{ number_format(collect($cart)->sum(fn ($item) => $item['price'] * $item['quantity']), 0, ',', '.') }}
                        </h4>

                        <div class="d-flex gap-2 mt-3">
                            <a href="{{ route('products.index') }}" class="btn btn-outline-success">
                                Lanjut Belanja
                            </a>

                            <a href="{{ route('checkout') }}" class="btn btn-success">
                                Checkout
                            </a>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
