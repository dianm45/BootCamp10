<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "ecommerce");

// Cek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$nama_produk = $_POST['nama_produk'] ?? '';
$harga = $_POST['harga'] ?? '';
$deskripsi = $_POST['deskripsi'] ?? '';

// Validasi data tidak boleh kosong
if (empty($nama_produk) || empty($harga) || empty($deskripsi)) {
    die("Semua data produk wajib diisi!");
}

// Validasi harga harus berupa angka
if (!is_numeric($harga)) {
    die("Harga harus berupa angka!");
}

// Simpan ke database
$query = "INSERT INTO products (nama_produk, harga, deskripsi, stok)
          VALUES ('$nama_produk', '$harga', '$deskripsi', 10)";

if (mysqli_query($conn, $query)) {

    echo "<h2>Produk berhasil ditambahkan!</h2>";
    echo "Nama Produk: " . $nama_produk . "<br>";
    echo "Harga: Rp " . $harga . "<br>";
    echo "Deskripsi: " . $deskripsi . "<br>";
    echo "Stok awal: 10";

} else {

    echo "Gagal menyimpan produk: " . mysqli_error($conn);

}

mysqli_close($conn);

?>