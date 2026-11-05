<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - DianStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        .checkout {
            max-width: 600px;
            margin-top: 25px;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px #00000010;
        }
        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
        }
        input, textarea {
            box-sizing: border-box;
            width: 100%;
            padding: 11px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
        }
        button {
            margin-top: 20px;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            background: #15803d;
            color: white;
            cursor: pointer;
        }
        a {
            color: #15803d;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('components.navbar')
    <a href="/">← Kembali ke Beranda</a>

    <h1>Checkout</h1>

    <div class="checkout">
        <h3>Ringkasan Pesanan</h3>

@foreach ($cart as $id => $item)
    <div style="padding: 10px 0; border-bottom: 1px solid #ddd;">
        <strong>{{ $item['name'] }}</strong>
        <p>Jumlah: {{ $item['quantity'] }}</p>
        <p>
            Subtotal:
            Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}
        </p>
    </div>
@endforeach

<h4>
    Total:
    Rp {{ number_format(collect($cart)->sum(fn ($item) => $item['price'] * $item['quantity']), 0, ',', '.') }}
</h4>
        <p>Lengkapi informasi berikut untuk melanjutkan pesanan.</p>

        <form action="{{ route('checkout.process') }}" method="POST">
    @csrf
            <label for="customer_name">Nama Lengkap</label>
            <input type="text" id="customer_name" name="customer_name" required>

            <label for="customer_email">Email</label>
            <input type="email" id="customer_email" name="customer_email">

            <label for="shipping_address">Alamat Pengiriman</label>
            <textarea id="shipping_address" name="shipping_address" rows="4" required></textarea>

           <button type="submit">Buat Pesanan</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @include('components.footer')
</body>
</html>
