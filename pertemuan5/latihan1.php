<?php
// array
// variable yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda

// membuat array
// cara lama
$hari = array("Senin","Selasa","Rabu");
//cara baru
$bulan = ["Januari","Februari","Maret"];
$arr1 = [123,"tulisan",false];

// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// // menampilkan 1 elemen pada array
// echo "<br>";
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

var_dump($hari);
$hari[]="Kamis";
$hari[]="Jumat";
echo "<br>";
var_dump($hari)

?>
