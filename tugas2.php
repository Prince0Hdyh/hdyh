
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan teknologi</title>
   
</head>
<body>


<?php
// Daftar data dengan minimal 10 entri
$data = array(
    array(
        'Teknologi' => 'Apple',
        'Nama' => 'steve john',
        'Gambar' => 'jhon Doe.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan Teknologi yang mengkhususkan diri dalam pengembangan perangkat lunak inovatif.'
    ),
    array(
        'Teknologi' => 'microsoft',
        'Nama' => 'Bill Gates',
        'Gambar' => 'jane smith.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan utama Microsoft didirikan sejak tahun 1975 dan bergerak di bidang produksi, lisensi, pengembangan software, dan mendukung produk serta layanan yang berkaitan dengan komputasi..'
    ),
    array(
        'Teknologi' => 'Arabian Oil',
        'Nama' => 'Arab Saudi',
        'Gambar' => 'alice.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => ' jawara perusahaan minyak.'
    ),
    array(
        'Teknologi' => 'Alphabet',
        'Nama' => 'Larry Parge',
        'Gambar' => 'bob.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => ' perusahaan holding dan konglomerat bentukan Google.'
    ),
    array(
        'Teknologi' => 'Amazon',
        'Nama' => 'Jefrey Bezos',
        'Gambar' => 'eva.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'perusahaan perdagangan multinasional yang berbasis elektronik .'
    ),
    // Tambahkan 5 entri lagi
    array(
        'Teknologi' => 'NVIDIA',
        'Nama' => 'Jen-Sun Huang',
        'Gambar' => 'david.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan tersebut merancang unit pemroses grafis (GPU) untuk pasar gim dan profesional, serta unit system on a chip (SoC) untuk komputasi seluler dan pasar otomotif..'
    ),
    array(
        'Teknologi' => 'Meta Platform',
        'Nama' => 'MArk Zuckberg',
        'Gambar' => 'sarah.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'perusahaan penyedia solusi jejaring sosial, periklanan, dan wawasan bisnis..'
    ),
    array(
        'Teknologi' => 'Tesla',
        'Nama' => 'Eon Musk',
        'Gambar' => 'michael.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'iperusahaan otomotif yang khusus memproduksi mobil sport elektrik..'
    ),
    array(
        'Teknologi' => 'Louis Vuitton',
        'Nama' => 'Louis Vuitton',
        'Gambar' => '1.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'perusahaan barang mewah dan rumah mode asal Prancis.'
    ),
    array(
        'Teknologi' => 'VISA',
        'Nama' => 'Dee Hosk',
        'Gambar' => '2.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => ' alat pembayaran digital dan dompet digital yang mempermudah aktivitas pembayaran.'
    ),
);

echo '<table border="1">';
echo '<tr>';
echo '<th>Teknologi</th>';
echo '<th>Nama</th>';
echo '<th>Gambar</th>';
echo '<th>Kategori</th>';
echo '<th>Deskripsi</th>';
echo '</tr>';

foreach ($data as $entry) {
    echo '<tr>';
    echo '<td>' . $entry['Teknologi'] . '</td>';
    echo '<td>' . $entry['Nama'] . '</td>';
    echo '<td><img src="' . $entry['Gambar'] . '" width="100" height="100"></td>';
    echo '<td>' . $entry['Kategori'] . '</td>';
    echo '<td>' . $entry['Deskripsi'] . '</td>';
    echo '</tr>';
}

echo '</table>';
?>


<table>
    
<style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 0 auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
          background-color: #ccc;
        }
    </style>
</table>


</body>
</html>