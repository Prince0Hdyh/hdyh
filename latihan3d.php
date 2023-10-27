<?php

function hitungFaktorial($hid) {
    if ($hid < 0) {
        return "Bilangan negatif tidak memiliki faktorial.";
    } elseif ($hid == 0 || $hid == 1) {
        return 1;
    } else {
        $faktorhidayah = 1;
        for ($i = 2; $i <= $hid; $i++) {
            $faktorhidayah *= $i;
        }
        return $faktorhidayah;
    }
}

// Contoh penggunaan fungsi
$bilanganku = 5;
$hasilFaktorial = hitungFaktorial($bilanganku);
echo "Faktorial dari $bilanganku adalah $hasilFaktorial";

?>