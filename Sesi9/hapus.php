
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
    "DELETE FROM products WHERE id = ?"
);
mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        header("Location: index.php");
        exit;
    } else {
        echo "Produk tidak ditemukan.";
    }
} else {
    echo "Gagal menghapus produk.";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
```

**Penjelasan singkat:**
- `DELETE FROM products WHERE id = ?` menghapus produk berdasarkan ID tertentu.
- `WHERE id = ?` penting supaya yang terhapus hanya satu produk, bukan seluruh isi tabel.
- `mysqli_prepare()` membantu menjalankan query dengan lebih aman.

Simpan file tersebut. Untuk mengetes, nanti kita tambahkan tautan **Hapus** di daftar produk.

**Jangan buka `hapus.php` dulu**, karena file ini langsung menghapus data. Setelah file selesai dibuat, bilang **“udah”**.