<?php


$nilai = '40';

if ($nilai >= '80') {
    echo 'A';
} elseif ($nilai >= '70') {
    echo 'B';
} elseif ($nilai >= '60') {
    echo 'C';
} else{
    echo 'D';
}




$kondisi = (date('H') <12) ? 'Selamat Pagi' ; "Selamat Siang";
echo $kondisi;

?>