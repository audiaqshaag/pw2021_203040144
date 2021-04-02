<?php
    include 'koneksi.php';
?>

<html>
<head>

</head>

<body>

<table border="1px solid black">
    <tr>
        <th>id</th>
        <th>Foto</th>
        <th>Nrp</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>

    

    <?php foreach($mahasiswa as $mhs) {?>
        <tr>
            <th> <?=$mhs['id_mhs']?> </th>
            <th><img src="img.jpg" style="width:100px;height:100px" alt=""></th>
            <th><?=$mhs['nrp']?></th>
            <th><?=$mhs['nama']?></th>
            <th><?=$mhs['email']?></th>
            <th><?=$mhs['jurusan']?></th>
            <th>

                <a href="ubah.php">Ubah</a>
                <a href="hapus.php?id=<?=$m['id'];?>">Hapus</a>
            
            </th>
        </tr>
    <?php } ?>

      
</table>   

</body>

</html>