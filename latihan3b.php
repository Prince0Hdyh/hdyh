<?php

$HidayahIsset = "<b>Isset adalah </b>= <br>
Sebuah fungsi yang digunakan untuk memeriksa apakah suatu variabel telah dideklarasikan (ada) dan memiliki nilai yang bukan NULL. Fungsi isset mengembalikan true jika variabel telah dideklarasikan dan memiliki nilai yang tidak NULL, dan mengembalikan false jika variabel tidak dideklarasikan atau memiliki nilai NULL.<br></br>
Fungsi isset berguna dalam situasi di mana Anda perlu memeriksa apakah variabel telah ada sebelum menggunakannya, karena mencoba mengakses variabel yang tidak ada atau NULL dapat menyebabkan kesalahan (error) dalam kode PHP.<br></br>";

$DayEmpty = "<b>Empty adalah</b> = <br>
 Sebuah fungsi yang digunakan untuk memeriksa apakah suatu variabel adalah <i>kosong</i> atau memiliki nilai yang dianggap <i>kosong</i>. Variabel dianggap kosong jika salah satu dari kondisi berikut terpenuhi:<br>
1. Nilai variabel adalah NULL.<br>
2. Nilai variabel adalah string kosong (). <br>
3. Nilai variabel adalah angka 0 (nol). <br>
4. Nilai variabel adalah array kosong. <br>
5. Nilai variabel adalah objek kosong.<br></br>";

function soal($style) {
    
    echo " <i>latihan 3b<br></i>"; 
    echo"  <b><i>Pengertian dari Isset dan Empty</i></b><br>
    <br></br>";
    global $HidayahIsset, $DayEmpty;




    if ($style == 'isset') {
        echo $HidayahIsset;
    } if ($style == 'empty') {
        echo $DayEmpty;
    } 
}



    soal('empty');
    soal('isset');
    ?>
