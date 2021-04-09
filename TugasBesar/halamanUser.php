<?php
require 'koneksi.php';

if (isset($_POST['cari'])) {
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'base.php' ?>
</head>


<body>


    <div class="isi w3-animate-top">
        <img class="m-3" style="float:left;width:30%;height:auto;" src="images/logo.png" alt="">
        <a class="btn btn-danger" style="margin-top:3%;margin-right:10%;float:right;" href="halamanAwal.php">Log Out</a>

        <br>
        <div id="header">

        </div>


        <br>

        <br><br>
        <?php include 'carosel.php' ?>
        <br>


        <div id="container">
            <br>
            <br>
            <table id="example" class="table  mt-3 text-white table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Brand</th>
                        <th>kategori</th>
                        <th>Harga</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($skate as $skt) : ?>


                        <tr>
                            <th> <?= $skt['id_barang'] ?> </th>
                            <th><img src="images/<?= $skt['foto'] ?>" style="width:100px;height:100px" alt=""></th>
                            <th><?= $skt['nama'] ?></th>
                            <th><?= $skt['brand'] ?></th>
                            <th><?= $skt['kategori'] ?></th>
                            <th><b><?= $skt['harga'] ?>$</b></th>
                            <th>

                            <a class="btn w3-green" href="#">Buy</a>


                            </th>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>


            <br>
            <br>



        </div>

        <br>
        <br>

        <br>

        <div id="footer">


            <div id="sosmed">
                <a href="https://www.instagram.com/audiaqsha/">

                    <img src="Images/instagram.png" style="width:30px;"></a>

                <a href="https://twitter.com/audiaqsha">

                    <img src="Images/burung.png" style="width:30px;"></a>

                <a href="https://about.me/audiaqsha/audiaqsha">

                    <img src="Images/me.png" style="width:23px;margin-left:4.5px;"></a>

            </div>
            <p style="padding-left:3px;">+6281283581324</p>
            <br>

        </div>
        <br>


    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>


</body>


</html>