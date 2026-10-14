
<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "ecommerce");

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Inisialisasi keranjang jika belum ada
if (!isset($_SESSION['keranjang'])) {
    $_SESSION['keranjang'] = [];
}

// Tambahkan produk ke keranjang
if (isset($_GET['tambah'])) {
    $id = filter_input(INPUT_GET, 'tambah', FILTER_VALIDATE_INT);

    if ($id && $id > 0) {
        $stmt = mysqli_prepare(
            $conn,
            "SELECT id, nama_produk, harga, stok
             FROM products WHERE id = ?"
        );

        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $produk = mysqli_fetch_assoc($result);

        if ($produk && $produk['stok'] > 0) {
            if (isset($_SESSION['keranjang'][$id])) {
                if ($_SESSION['keranjang'][$id]['jumlah'] < $produk['stok']) {
                    $_SESSION['keranjang'][$id]['jumlah']++;
                }
            } else {
                $_SESSION['keranjang'][$id] = [
                    'id' => $produk['id'],
                    'nama' => $produk['nama_produk'],
                    'harga' => $produk['harga'],
                    'jumlah' => 1,
                    'stok' => $produk['stok']
                ];
            }
        }

        mysqli_stmt_close($stmt);
    }

    header("Location: keranjang.php");
    exit;
}

// Hapus produk dari keranjang
if (isset($_GET['hapus'])) {
    $id = filter_input(INPUT_GET, 'hapus', FILTER_VALIDATE_INT);

    if ($id) {
        unset($_SESSION['keranjang'][$id]);
    }

    header("Location: keranjang.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
</head>
<body>

<h1>Keranjang Belanja</h1>

<?php if (empty($_SESSION['keranjang'])): ?>
    <p>Keranjang masih kosong.</p>
<?php else: ?>

    <?php $total = 0; ?>

    <?php foreach ($_SESSION['keranjang'] as $item): ?>
        <?php $subtotal = $item['harga'] * $item['jumlah']; ?>
        <?php $total += $subtotal; ?>

        <div>
            <h3><?= htmlspecialchars($item['nama']) ?></h3>
            <p>Harga: Rp <?= number_format($item['harga'], 0, ',', '.') ?></p>
            <p>Jumlah: <?= $item['jumlah'] ?></p>
            <p>Subtotal: Rp <?= number_format($subtotal, 0, ',', '.') ?></p>

            <a href="keranjang.php?hapus=<?= (int)$item['id'] ?>">
                Hapus dari keranjang
            </a>
        </div>

        <hr>
    <?php endforeach; ?>

    <h2>Total: Rp <?= number_format($total, 0, ',', '.') ?></h2>

<?php endif; ?>

<p><a href="index.php">Kembali ke Daftar Produk</a></p>

</body>
</html>

<?php mysqli_close($conn); ?>
