<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Array</title>
</head>
<body>

<?php
// Buat associative array dengan 5 field data
$HidayahArray = [
    [
        'nama' => 'Hidayah Herliyani',
        'umur' => 19,
        'alamat' => 'Mendalo Indah, Mendalo, Jambi Luar Kota',
        'pekerjaan' => 'Mahasiswa',
        'gambar' => 'meHI.jpeg',
    ],
    [
      'nama' => 'Hidayah Herliyani',
        'umur' => 19,
        'alamat' => 'Mendalo Indah, Mendalo, Jambi Luar Kota',
        'pekerjaan' => 'Mahasiswa',
        'gambar' => 'meHI.jpeg',
  ],
  [
    'nama' => 'Hidayah Herliyani',
        'umur' => 19,
        'alamat' => 'Mendalo Indah, Mendalo, Jambi Luar Kota',
        'pekerjaan' => 'Mahasiswa',
        'gambar' => 'meHI.jpeg',
],
[
  'nama' => 'Hidayah Herliyani',
  'umur' => 19,
  'alamat' => 'Mendalo Indah, Mendalo, Jambi Luar Kota',
  'pekerjaan' => 'Mahasiswa',
  'gambar' => 'meHI.jpeg',
],
[
  'nama' => 'Hidayah Herliyani',
        'umur' => 19,
        'alamat' => 'Mendalo Indah, Mendalo, Jambi Luar Kota',
        'pekerjaan' => 'Mahasiswa',
        'gambar' => 'meHI.jpeg',
],
[
  'nama' => 'Hidayah Herliyani',
        'umur' => 19,
        'alamat' => 'Mendalo Indah, Mendalo, Jambi Luar Kota',
        'pekerjaan' => 'Mahasiswa',
        'gambar' => 'meHI.jpeg',
],
[
  'nama' => 'Hidayah Herliyani',
        'umur' => 19,
        'alamat' => 'Mendalo Indah, Mendalo, Jambi Luar Kota',
        'pekerjaan' => 'Mahasiswa',
        'gambar' => 'meHI.jpeg',
],
[
  'nama' => 'Hidayah Herliyani',
        'umur' => 19,
        'alamat' => 'Mendalo Indah, Mendalo, Jambi Luar Kota',
        'pekerjaan' => 'Mahasiswa',
        'gambar' => 'meHI.jpeg',
],
[
  'nama' => 'Hidayah Herliyani',
  'umur' => 19,
  'alamat' => 'Mendalo Indah, Mendalo, Jambi Luar Kota',
  'pekerjaan' => 'Mahasiswa',
  'gambar' => 'meHI.jpeg',
],
[
  'nama' => 'Hidayah Herliyani',
        'umur' => 19,
        'alamat' => 'Mendalo Indah, Mendalo, Jambi Luar Kota',
        'pekerjaan' => 'Mahasiswa',
        'gambar' => 'meHI.jpeg',
],

];


echo '<table border="1">';
echo '<tr><th>Nama</th><th>Umur</th><th>Alamat</th><th>Pekerjaan</th><th>Gambar</th></tr>';
foreach ($HidayahArray as $data) {
    echo '<tr>';
    // Tambahkan link pada field 'nama'
    echo '<td><a href="latihan5c.php?' . http_build_query($data) . '">' . $data['nama'] . '</a></td>';
    echo '<td>' . $data['umur'] . '</td>';
    echo '<td>' . $data['alamat'] . '</td>';
    echo '<td>' . $data['pekerjaan'] . '</td>';
    // Tambahkan gambar sesuai kebutuhan
    echo '<td><img src="' . $data['gambar'] . '" alt="Gambar"></td>';
    echo '</tr>';
}
echo '</table>';
?>

    
<style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
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