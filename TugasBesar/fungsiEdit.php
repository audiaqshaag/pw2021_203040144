<?php
//fungsi delete
include "koneksi.php";

$idtemp = $_POST['id_barang'];
if ($_POST['ubah']) {

  $nama  = $_POST['nama'];
  $brand  = $_POST['brand'];
  $kategori  = $_POST['kategori'];
  $harga  = $_POST['harga'];
  $foto  = $_FILES['foto']['name'];

  $mysqli = "UPDATE tbl_skate
SET nama = $nama, brand= $brand,kategori=$kategori,harga=$harga,foto=$foto
WHERE CustomerID = $id;";

  $result  = mysqli_query($conn, $mysqli);

  if ($result) {
    echo "<script>
      alert('Data berhasil dirubah');
      document.location.href='halamanAdmin.php';
      </script>";
  } else {
    echo "data gagal dirubah!";
  }

  mysqli_close($conn);
}
