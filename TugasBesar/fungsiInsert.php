<?php
  include "koneksi.php";

  //fungsi insert

  if($_POST['upload']){

  $nama  = $_POST['nama'];
  $brand  = $_POST['brand'];
  $kategori  = $_POST['kategori'];
  $harga  = $_POST['harga'];
  $foto  = $_FILES['foto']['name'];
  $mysqli  = "INSERT INTO tbl_skate (nama,brand,kategori,harga,foto) VALUES ('$nama', '$brand', '$kategori','$harga','$foto')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo "<script>
    alert('Data berhasil ditambahkan');
    document.location.href='halamanAdmin.php';
    </script>";
} else {
    echo "data gagal ditambahkan!";
}
  mysqli_close($conn);
}
