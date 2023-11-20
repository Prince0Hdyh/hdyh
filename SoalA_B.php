<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidayah no 2</title>
</head>
<body>
    


<?php

$tanggal_transaksi = "Senin 20 November 2023";


$produk_dibeli = array(
    array("Produk" => "Baju Bayi", "Jumlah" => 3, "Harga" => 35500),
    array("Produk" => "Diapers", "Jumlah" => 5, "Harga" => 51000),
    array("Produk" => "Bedak", "Jumlah" => 1, "Harga" => 15000),
    array("Produk" => "Minyak Telon", "Jumlah" => 2, "Harga" => 30000),
    array("Produk" => "Baby oil", "Jumlah" => 3, "Harga" => 16000),
    
);

// Hitung total pembelian
$total_pembelian = 0;

foreach ($produk_dibeli as $produk) {
    $total_pembelian += $produk["Jumlah"] * $produk["Harga"];
}

// Diskon
$diskon = 0;
if ($total_pembelian >= 50000 ) {
    $diskon=(($total_pembelian*10)/100);
    $total_bayar=($total_pembelian-$diskon);
}else if ($total_pembelian >= 100000) {
    $diskon=(($total_pembelian*20)/100);
    $total_bayar=($total_pembelian-$diskon);
}

//  total pembayaran setelah diskon
$total_pembayaran_setelah_diskon =  $total_bayar=($total_pembelian-$diskon);


echo "<h2>Tanggal Transaksi: $tanggal_transaksi</h2>";

echo "<table border='1'>";
echo "<tr><th>Produk</th><th>Jumlah</th></tr>";
foreach ($produk_dibeli as $produk) {
    echo "<tr>";
    echo "<td>{$produk['Produk']} ({$produk['Jumlah']}X" . number_format($produk['Harga'], 0, '.', ',') . ")</td>";
    echo "<td>" . number_format($produk['Jumlah'] * $produk['Harga'], 0, '.', ',') . "</td>";
    echo "</tr>";
}
echo "<tr><th>Total:</th><td>" . number_format($total_pembelian, 0, '.', ',') . "</td></tr>";
echo "<tr><th>Diskon:</th><td>" . number_format($diskon , 0) . "</td></tr>";
echo "<tr><th>Total Pembayaran:</th><td>" . number_format($total_pembayaran_setelah_diskon, 0, '.', ',') . "</td></tr>";
echo "</table>";


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

</body>
</html>