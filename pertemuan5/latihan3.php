<?php
$mahasiswa=[
    ["Audi Aqsha","203040144","Teknik Informatika","audiaqsha578@gmail.com"],["Sandhika Galih","203040145","Teknik Informatika","shandikagalih@gmail.com"],["Dody","203040146","Teknik Informatika","Dody@gmail.com"]
];


?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Daftar Mahasiswa</title>

</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <ul>
    <!-- <li>Audi Aqsha</li>
    <li>203040144</li>
    <li>Teknik Informatika</li>
    <li>audiaqsha578@gmail.com</li> -->

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
        <br>
    </ul>

    <?php endforeach ?>
    </ul>
</body>
</html>