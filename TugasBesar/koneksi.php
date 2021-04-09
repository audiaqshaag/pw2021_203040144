
<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'pw_203040144';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


if ($conn->connect_error) {
    die("koneksi error: " . $conn->connect_error);
}


$sql = "SELECT * from tbl_skate";

$result = mysqli_query($conn, $sql);

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

$skate = $rows;



?>