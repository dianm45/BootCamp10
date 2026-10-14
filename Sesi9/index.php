
<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Sesi 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<h1>Temukan Produk Favoritmu</h1>
<p class="page-subtitle">Pilih produk yang kamu butuhkan hari ini.</p>

<div class="product-grid">
    <?php while ($produk = mysqli_fetch_assoc($result)) : ?>
        <div class="product-card">
          <?php
$namaGambar = [
    'Mouse Wireless' => 'mouse.jpg',
    'Laptop ASUS VivoBook' => 'Laptop ASUS VivoBook.jpg',
    'Keyboard Mechanical' => 'Keyboard Mechanical.jpg',
    'Headphone Bluetooth' => 'Headphone Bluetooth.jpg',
    'Smartwatch' => 'Smartwatch.jpg',
    'Kaos Basic Putih' => 'Kaos Basic Putih.jpg',
    'Hoodie Oversize' => 'Hoodie Oversize.jpg',
    'Sneakers Casual' => 'Sneakers Casual.jpg',
    'Tas Ransel' => 'Tas Ransel.jpg',
    'Novel Romance' => 'Novel Romance.jpg',
    'Buku HTML dan CSS' => 'Buku HTML dan CSS.jpg',
    'Kopi Arabica' => 'Kopi Arabica.jpg',
    'Tumbler Stainless' => 'Tumbler Stainless.jpg'
];

$namaProduk = $produk['nama_produk'];
$fileGambar = $namaGambar[$namaProduk] ?? '';
?>

<div class="product-image">
    <?php if ($fileGambar !== ''): ?>
        <img
            src="images/<?= rawurlencode($fileGambar) ?>"
            alt="<?= htmlspecialchars($namaProduk) ?>"
        >
    <?php else: ?>
        <span>Produk</span>
    <?php endif; ?>
</div>

            <div class="product-info">
                <p class="product-category">
                    <?= htmlspecialchars($produk['kategori'] ?? 'Umum') ?>
                </p>

                <h3>
                    <?= htmlspecialchars($produk['nama_produk']) ?>
                </h3>

                <p class="product-description">
                    <?= htmlspecialchars($produk['deskripsi']) ?>
                </p>

                <p class="product-stock">
                    Stok tersedia: <?= (int)$produk['stok'] ?>
                </p>

                <p class="product-price">
                    Rp <?= number_format($produk['harga'], 0, ',', '.') ?>
                </p>

                <div class="product-actions">
                    <a href="edit.php?id=<?= (int)$produk['id'] ?>">
                        Edit
                    </a>

                    <a href="hapus.php?id=<?= (int)$produk['id'] ?>"
                       onclick="return confirm('Yakin ingin menghapus produk ini?')">
                        Hapus
                    </a>
                </div>

                <a class="add-cart-button"
                   href="keranjang.php?tambah=<?= (int)$produk['id'] ?>">
                    + Tambah ke Keranjang
                </a>
            </div>
        </div>
    <?php endwhile; ?>
</div>


</body>
</html>
