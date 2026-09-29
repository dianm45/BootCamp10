<?php

$harga = 7500000;
$stok = 10;

$total = $harga * $stok;

echo "Harga produk: Rp " . $harga . "<br>";
echo "Stok: " . $stok . "<br>";
echo "Total nilai stok: Rp " . $total . "<br><br>";

if ($stok > 0) {
    echo "Status: Produk tersedia";
} else {
    echo "Status: Produk habis";
}

?>