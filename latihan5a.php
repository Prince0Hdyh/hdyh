
<?php

$angka = isset($_GET['angka']) ? $_GET['angka'] : 10;

// Membuat rangkaian angka terurut
for ($i = 0; $i < $angka; $i++) {
    for ($j = 1; $j <= $angka - $i; $j++) {
        echo $j . ' ';
    }
    echo '<br>';
}
?>
