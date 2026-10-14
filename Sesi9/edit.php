
<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if (!$id || $id < 1) {
    die("ID produk tidak valid.");
}

$stmt = mysqli_prepare(
    $conn,
    "SELECT * FROM products WHERE id = ?"
);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$produk = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

if (!$produk) {
    die("Produk tidak ditemukan.");
}

$pesan = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama_produk"] ?? "");
    $deskripsi = trim($_POST["deskripsi"] ?? "");
    $harga = $_POST["harga"] ?? "";

    if ($nama === "" || $deskripsi === "" || $harga === "") {
        $pesan = "Semua data wajib diisi!";
    } elseif (!is_numeric($harga) || $harga < 0) {
        $pesan = "Harga harus berupa angka dan tidak boleh negatif.";
    } else {
        $stmt = mysqli_prepare(
            $conn,
            "UPDATE products
             SET nama_produk = ?, harga = ?, deskripsi = ?
             WHERE id = ?"
        );

        mysqli_stmt_bind_param(
            $stmt,
            "sdsi",
            $nama,
            $harga,
            $deskripsi,
            $id
        );

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            header("Location: index.php");
            exit;
        } else {
            $pesan = "Produk gagal diperbarui.";
            mysqli_stmt_close($stmt);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>

    <p><?= htmlspecialchars($pesan) ?></p>

    <form method="POST">
        <label>Nama Produk</label><br>
        <input
            type="text"
            name="nama_produk"
            value="<?= htmlspecialchars($produk['nama_produk']) ?>"
            required
        ><br><br>

        <label>Deskripsi</label><br>
        <textarea name="deskripsi" required><?= htmlspecialchars($produk['deskripsi']) ?></textarea><br><br>

        <label>Harga</label><br>
        <input
            type="number"
            name="harga"
            min="0"
            value="<?= htmlspecialchars((string)$produk['harga']) ?>"
            required
        ><br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <p><a href="index.php">Kembali ke Daftar Produk</a></p>
</body>
</html>
