<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            color: #263238;
        }

        nav {
            background: #2563eb;
            color: white;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h2 {
            font-size: 24px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .hero {
            background: #dbeafe;
            padding: 45px 8%;
        }

        .hero h1 {
            margin-bottom: 12px;
            font-size: 32px;
        }

        .hero p {
            color: #475569;
            margin-bottom: 22px;
        }

        .search {
            display: flex;
            gap: 10px;
            max-width: 550px;
        }

        .search input {
            flex: 1;
            min-width: 0;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
        }

        .search button {
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            background: #2563eb;
            color: white;
            cursor: pointer;
        }

        main {
            padding: 30px 8%;
        }

       .category {
            display: inline-block;
            background: white;
            border: 1px solid #e2e8f0;
            padding: 12px 18px;
            border-radius: 20px;
            color: #263238;
            text-decoration: none;
            cursor: pointer;
            transition: 0.2s;
        }

        .category:hover {
            background: #2563eb;
            color: white;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .product {
            background: white;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
        }

        .product-image {
            height: 130px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eff6ff;
            border-radius: 8px;
            font-size: 48px;
            margin-bottom: 15px;
        }

        .product h3 {
            font-size: 17px;
            margin-bottom: 8px;
        }

        .price {
            color: #2563eb;
            font-weight: bold;
            margin-top: 12px;
        }

        .buy {
            display: block;
            text-align: center;
            background: #2563eb;
            color: white;
            padding: 10px;
            margin-top: 15px;
            border-radius: 8px;
            text-decoration: none;
        }

        @media (max-width: 900px) {
            .products {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 500px) {
            nav {
                padding: 18px 5%;
            }

            nav a {
                margin-left: 10px;
            }

            .hero, main {
                padding: 25px 5%;
            }

            .hero h1 {
                font-size: 26px;
            }

            .products {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <nav>
        <h2>DianStore</h2>
        <div>
            <a href="/">Home</a>
            <a href="/products">Produk</a>
            <a href="/cart">Keranjang</a>
        </div>
    </nav>

    <section class="hero">
        <h1>Belanja Jadi Lebih Mudah!</h1>
        <p>Temukan produk pilihan untuk kebutuhan sehari-harimu.</p>

        <form class="search" action="/products" method="GET">
            <input type="text" name="search" placeholder="Cari produk...">
            <button type="submit">Cari</button>
        </form>
    </section>

    <main>
        <h2>Kategori Pilihan</h2>

    <div class="categories">
            <a href="/products?category=Elektronik" class="category">Elektronik</a>
            <a href="/products?category=Fashion" class="category">Fashion</a>
            <a href="/products?category=Buku" class="category">Buku</a>
            <a href="/products?category=Rumah%20Tangga" class="category">Rumah Tangga</a>
    </div>

        <h2>Produk Pilihan</h2>

        <div class="products">
            <div class="product">
                <div class="product-image">🎧</div>
                <h3>Headphone Bluetooth</h3>
                <p>Headphone nyaman untuk mendengarkan musik.</p>
                <div class="price">Rp250.000</div>
                <a href="/products" class="buy">Lihat Produk</a>
            </div>

            <div class="product">
                <div class="product-image">⌚</div>
                <h3>Smartwatch</h3>
                <p>Jam pintar untuk aktivitas sehari-hari.</p>
                <div class="price">Rp450.000</div>
                <a href="/cart" class="buy">Lihat Produk</a>
            </div>

            <div class="product">
                <div class="product-image">👕</div>
                <h3>Kaos Basic</h3>
                <p>Kaos simpel untuk gaya kasual.</p>
                <div class="price">Rp85.000</div>
                <a href="/cart" class="buy">Lihat Produk</a>
            </div>

            <div class="product">
                <div class="product-image">📚</div>
                <h3>Buku HTML dan CSS</h3>
                <p>Buku belajar dasar pengembangan web.</p>
                <div class="price">Rp120.000</div>
                <a href="/cart" class="buy">Lihat Produk</a>
            </div>
        </div>
    </main>
</body>
</html>
