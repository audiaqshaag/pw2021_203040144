<?php>

function hapus($id){
    $conn = koneksi();
    mysqli_query($conn,"DELETE FROM tbl_mahasiswa WHERE id=$id")or die(mysqli_error_($conn));
}

function ubah($data){
    $conn = koneksi();

    $id = $data['id'];
    $nama=htmlspecialchars($data['nama']);
    $nrp=htmlspecialchars($data['nrp']);
    $email=htmlspecialchars($data['email']);
    $jurusan=htmlspecialchars($data['jurusan']);
    $gambar=htmlspecialchars($data['gambar']);

    $query="UPDATE tbl_mahasiswa SET
    nama='$nama',
    nrp='$nrp',
    email='$email',
    jurusan='$jurusan',
    gambar='$gambar'
        ";

        mysqli_query($conn,$query)or die(mysqli_error($conn));
        return mysqli_affected_rows($conn);
}

function login(){
    
}
?>