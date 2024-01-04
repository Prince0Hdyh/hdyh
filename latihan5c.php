<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <style>
      .body {
        text-align: center;
      
      }
    </style>
</head>
<body>
<div class="body">

<?php

$nama = $_GET['nama'];
$umur = $_GET['umur'];
$alamat = $_GET['alamat'];
$pekerjaan = $_GET['pekerjaan'];
$gambar = $_GET['gambar'];



echo '<h2>Profil Mahasiswa</h2>';

echo '<img src="' . $gambar . '" alt="Gambar">';
echo '<p>Nama: ' . $nama . '</p>';
echo '<p>Umur: ' . $umur . '</p>';
echo '<p>Alamat: ' . $alamat . '</p>';
echo '<p>Pekerjaan: ' . $pekerjaan . '</p>';


?>
</div>
</body>
</html>