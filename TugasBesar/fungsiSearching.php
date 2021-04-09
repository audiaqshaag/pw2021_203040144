<?php
include 'koneksi.php';



if ($_POST['cari']) {
    $search = $_POST['keyword'];

    $mysqli = "SELECT * FROM tbl_skate WHERE nama LIKE '%$search%'";

    $result  = mysqli_query($conn, $mysqli);

    $rows = [];
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }


    $skate = $rows;

    if ($result) {
        echo "<script>
            document.location.href='tubes.php';
            </script>";
    } else {
        echo "data tidak ditemukan!";
    }

    mysqli_close($conn);
}
