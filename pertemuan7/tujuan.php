<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$hasil = false;

if($username=="audi"&&$password=="1234"){
    echo "Selamat datang ".$username;
}

else if(empty($username)==true&&empty($password)==true){
    echo "Username atau Password harus diisi!";
}

else{
    echo "Username atau Password salah!";
}



?>