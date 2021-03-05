<?php 
$mahasiswa=[
    ["Audi Aqsha","203040144","Teknik Informatika","audiaqsha578@gmail.com"],["Sandhika Galih","203040145","Teknik Informatika","shandikagalih@gmail.com"],["Dody","203040146","Teknik Informatika","Dody@gmail.com"]
];

$mahasiswa = [
[
    "nama" => "Audi Aqsha",
    "nrp" => "203040144",
    "email" => "audiaqsha578@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar"=> "audi.jpeg"
],
[
    "nama" => "Doddy Ferdiansyah",
    "nrp" => "203040145",
    "email" => "dodi@gmail.com",
    "jurusan" => "Teknik Informatika"
    ]
    ]
?>

<html>
<head>
<title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) : ?>
<ul>
    <li>
        <img src="<?= $mhs["gambar"]; ?>" >
    </li>
    <>Nama   :<?php echo $mhs["nama"]; ?></>
    <li>Nrp    :<?php echo $mhs["nrp"]; ?></li>
    <li>Email  :<?php echo $mhs["jurusan"]; ?></li>
    <li>Jurusan:<?php echo $mhs["email"]; ?></li>
</ul>

<?php endforeach;; ?>
</body>

</html>