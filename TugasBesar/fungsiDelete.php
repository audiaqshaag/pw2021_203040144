<?php
//fungsi delete
include "koneksi.php";



$id = $_GET['id_barang']; // get id through query string
$mysqli = "DELETE from tbl_skate where id_barang = $id";

$result  = mysqli_query($conn, $mysqli);

if ($result) {
  echo "<script>
      alert('Data berhasil dihapus');
      document.location.href='tubes.php';
      </script>";
} else {
  echo "data gagal dihapus!";
}

mysqli_close($conn);
