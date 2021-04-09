<?php
include "koneksi.php";

//fungsi insert

if ($_POST['regist']) {


  $username = $_POST['username'];
  $pass  = $_POST['pass'];
  $akun  = $_POST['akun'];

  $mysqli  = "INSERT INTO tbl_akun (username,password,akun) VALUES ( '$username', '$pass','$akun')";
  $result  = mysqli_query($conn, $mysqli);

  if ($result) {
    echo "<script>
    alert('Registrasi berhasil');
    document.location.href='halamanAwal.php';
    </script>";
  } else {
    echo  "<script>
    alert('Registrasi Gagal!');
    document.location.href='registrasi.php';
    </script>";;
  }
  mysqli_close($conn);
}
