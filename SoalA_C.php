<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hidayah no 3</title>
</head>
<body>
    


<?php
// Data barang dalam bentuk array multidimensi
$barang = array(
    array("Nama Produk" => "Minyak Telon","Stok"=> 20, "Harga"=> 30000),
    array("Nama Produk" => "Diapers","Stok"=> 25, "Harga"=> 51000),
    array("Nama Produk" => "Baby Oil","Stok"=> 15,"Harga"=> 16000),
    array("Nama Produk" => "Shampo Baby","Stok"=> 20,"Harga"=> 20000),
    array("Nama Produk" => "Bedak","Stok" => 15,"Harga"=> 15000),
    array("Nama Produk" =>"Baju Bayi","Stok"=> 20,"Harga"=> 35500),
    array("Nama Produk" => "Jumper","Stok"=> 25,"Harga"=> 50000),
);

// Fungsi untuk menghitung total jumlah
function hitungTotalJumlah($barang) {
    $totalJumlah = 0;
    foreach ($barang as $item) {
        $totalJumlah += $item['Stok'] * $item['Harga'];
    }
    return $totalJumlah;
}

// Hitung total jumlah
$totalJumlah = hitungTotalJumlah($barang);

// Cek apakah ada diskon
$diskon = 0;

if ($totalJumlah >= 200000) {
    $diskon = 0.2; // 20%
} elseif ($totalJumlah >= 150000) {
    $diskon = 0.1; // 10%
}
// total yang harus dibayar setelah diskon
$totalBayar = $totalJumlah - ($totalJumlah * $diskon);

// Tampilkan data dalam tabel terurut
echo "Tanggal Transaksi: Senin 20 November 2023<br>";
echo "<table border='1'>";
echo "<tr><th>Nama Produk</th><th>Stok</th><th>Harga</th></tr>";

// Urutkan arraynya berdasarkan nama produk
usort($barang, function($a, $b) {
    return strcmp($a['Nama Produk'], $b['Nama Produk']);
});

foreach ($barang as $item) {
    echo "<tr>";
    echo "<td>" . $item['Nama Produk'] . "</td>";
    echo "<td>" . $item['Stok'] . "</td>";
    echo "<td>" . $item['Harga'] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "a. Total Jumlah: " . $totalJumlah . " Rupiah<br>";
echo "b. Diskon: " . ($diskon ) . "<br>";
echo "c. Total Pembayaran: " . $totalBayar . " Rupiah";
?>

 
<style>
        table {
            border-collapse: collapse;
            width: 30%;
            margin: 0 auto;
            margin-left: 5px;
        }
        table, th, td {
            border: 1px solid black;
        }  
        th, td {
            padding: 5px;
            text-align: left;
        }
        th {
          background-color: #ccc;
        }
    </style>

</table>
</body>
</html>