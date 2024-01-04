<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rangkaian Angka</title>
</head>
<body>

<form action="" method="post">
  Masukkan jumlah angka: <input type="text" name="angka" value="<?= isset($angka) ? $angka : '' ?>">
  <input type="submit" value="Tampilkan">
</form>

<?php
// Inisialisasi variabel angka
$angka = 10;

// Periksa apakah formulir telah dikirim (metode POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Periksa apakah parameter 'angka' ada pada metode POST
    $angka = isset($_POST['angka']) ? intval($_POST['angka']) : 10;
}

// Membuat rangkaian angka terurut
for ($i = 0; $i < $angka; $i++) {
    for ($j = 1; $j <= $angka - $i; $j++) {
        echo $j . ' ';
    }
    echo '<br>';
}
?>

</body>
</html>