
```php
<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$pesan = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama_produk"] ?? "");
    $deskripsi = trim($_POST["deskripsi"] ?? "");
    $harga = $_POST["harga"] ?? "";
    $kategori = trim($_POST["kategori"] ?? "");

    if (
        $nama === "" ||
        $deskripsi === "" ||
        $harga === "" ||
        $kategori === "" ||
        !isset($_FILES["gambar"])
    ) {
        $pesan = "Semua data wajib diisi!";
    } elseif (!is_numeric($harga) || $harga < 0) {
        $pesan = "Harga harus berupa angka dan tidak boleh negatif.";
    } elseif ($_FILES["gambar"]["error"] !== UPLOAD_ERR_OK) {
        $pesan = "Gambar gagal diunggah.";
    } else {
        $folderGambar = __DIR__ . "/images/";

        if (!is_dir($folderGambar)) {
            mkdir($folderGambar, 0755, true);
        }

        $namaAsli = $_FILES["gambar"]["name"];
        $tmpGambar = $_FILES["gambar"]["tmp_name"];
        $ekstensi = strtolower(pathinfo($namaAsli, PATHINFO_EXTENSION));
        $ekstensiDiizinkan = ["jpg", "jpeg", "png", "webp"];

        $infoGambar = getimagesize($tmpGambar);

        if (
            $infoGambar === false ||
            !in_array($ekstensi, $ekstensiDiizinkan, true)
        ) {
            $pesan = "Format gambar harus JPG, JPEG, PNG, atau WEBP.";
        } elseif ($_FILES["gambar"]["size"] > 2 * 1024 * 1024) {
            $pesan = "Ukuran gambar maksimal 2 MB.";
        } else {
            $namaFile = uniqid("produk_", true) . "." . $ekstensi;
            $tujuanGambar = $folderGambar . $namaFile;

            if (move_uploaded_file($tmpGambar, $tujuanGambar)) {
                $namaFile = basename($tujuanGambar);
                $pesan = "Gambar berhasil diunggah.";
                $stok = 10;

                $stmt = mysqli_prepare(
                    $conn,
                    "INSERT INTO products
                    (nama_produk, harga, deskripsi, stok, gambar, kategori)
                    VALUES (?, ?, ?, ?, ?, ?)"
                );  

                mysqli_stmt_bind_param(
                $stmt,
                "sdsiss",
                 $nama,
                $harga,
                $deskripsi,
                $stok,
                $namaFile,
                $kategori
);

                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_close($stmt);
                    header("Location: index.php");
                    exit;
                } else {
                    unlink($tujuanGambar);
                    $pesan = "Produk gagal ditambahkan ke database: " . mysqli_stmt_error($stmt);
                }

                mysqli_stmt_close($stmt);
            } else {
                $pesan = "Gagal menyimpan gambar ke folder images.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>

    <?php if ($pesan !== ""): ?>
        <p><?= htmlspecialchars($pesan) ?></p>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data">
        <label>Nama Produk</label><br>
        <input type="text" name="nama_produk" required>
        <br><br>

        <label>Deskripsi</label><br>
        <textarea name="deskripsi" required></textarea>
        <br><br>

        <label>Harga</label><br>
        <input type="number" name="harga" min="0" step="1" required>
        <br><br>
```html
<label>Kategori</label><br>
<select name="kategori" required>
    <option value="">Pilih kategori</option>
    <option value="Elektronik">Elektronik</option>
    <option value="Fashion">Fashion</option>
    <option value="Buku">Buku</option>
    <option value="Makanan">Makanan</option>
    <option value="Rumah Tangga">Rumah Tangga</option>
    <option value="Olahraga">Olahraga</option>
    <option value="Kecantikan">Kecantikan</option>
    <option value="Alat Tulis">Alat Tulis</option>
</select>
<br><br>
```
        <label>Gambar Produk</label><br>
        <input
            type="file"
            name="gambar"
            accept=".jpg,.jpeg,.png,.webp"
            required
        >
        <br><br>

        <button type="submit">Tambah Produk</button>
    </form>

    <p><a href="index.php">Kembali ke Daftar Produk</a></p>
</body>
</html>
```