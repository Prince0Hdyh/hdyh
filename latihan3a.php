<!DOCTYPE html>
<html lang="en">

<?php
$tulisan = "Hello World! Here I come!<br> I'm Hidayah and I'm ready!!!";
$kelas = "ganti-style";

   echo ganti_style ($tulisan, $kelas);

   function ganti_style($text, $kelas){
    return "<span class = '$kelas'> $text</span>";
   }
?>

<style>
    body{
        color: darkcyan;
        text-size-adjust: 30 px;
        font-size: larger;
        font-style: italic;
        
    }
</style>

</html>