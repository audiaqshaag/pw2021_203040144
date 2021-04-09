<?php

include 'koneksi.php';


$username = $_GET['username'];
$password = $_GET['password'];
$query = mysqli_query($conn, "select * from tbl_akun where username='$username' and password='$password'");

$row=mysqli_fetch_row($query);

if ($row[3] == '1') {
    echo "<script>
    alert('Login Akun Admin');
    document.location.href='halamanAdmin.php';
    </script>";
} else if ($row[3] == '2') {
    echo "<script>
    alert('Login Akun User');
    document.location.href='halamanUser.php';
    </script>";
} else {
    echo "<script>
    alert('Akun tidak ditemukan!');
    document.location.href='halamanAwal.php';
    </script>";
}
