<?php

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "ecommerce");

// Cek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Filter produk berdasarkan kategori
$kategori = $_GET['kategori'] ?? '';

if ($kategori != '') {
    $query = "SELECT * FROM products WHERE kategori = '$kategori'";
} else {
    $query = "SELECT * FROM products";
}

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>

    <h1>Daftar Produk</h1>
    <form method="GET">
    <label for="kategori">Filter Kategori:</label>

    <select name="kategori" id="kategori" onchange="this.form.submit()">
        <option value="">Semua Kategori</option>
        <option value="Elektronik">Elektronik</option>
        <option value="Fashion">Fashion</option>
        <option value="Makanan">Makanan</option>
        <option value="Buku">Buku</option>
    </select>
</form>

<br>

    <?php while ($produk = mysqli_fetch_assoc($result)) : ?>

        <div>
            <h3><?= $produk['nama_produk']; ?></h3>
            <p>Harga: Rp <?= $produk['harga']; ?></p>
            <p><?= $produk['deskripsi']; ?></p>
            <p>Stok: <?= $produk['stok']; ?></p>
        </div>

        <hr>

    <?php endwhile; ?>

</body>
</html>

<?php
mysqli_close($conn);
?>