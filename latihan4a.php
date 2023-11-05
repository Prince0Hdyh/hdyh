<?php 

$warna_balonnya = [" Hijau " , " Kuning ", " Kelabu ", " Merah Muda " ];

echo "Balonku ada lima <br>";
echo"Rupa-rupa warnanya<br>";


$hasilnya = array_push($warna_balonnya,"dan Biru");
foreach ($warna_balonnya as $warni =>$warnaWarni ) { 
  echo " $warnaWarni  ";
}
echo"<br>";

$hijau = array_shift($warna_balonnya);
echo"Meletus balon $hijau DORR!! <br>";


echo"Hatiku sangat kacau~~~";
?>