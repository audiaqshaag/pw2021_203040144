<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://malsup.github.com/jquery.form.js"></script>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'base.php' ?>

    <style>
        .formtambah {
            margin-left: 25%;
        }

        .gambarr {
            margin-left: 3px;
        }
    </style>
</head>


<body>


    <div class="isi w3-animate-top">

        <img class="m-3" style="float:left;width:30%;height:auto;" src="images/logo.png" alt="">
        <br><br><br><br>
        <div id="header">
            <br>
            <br>
        </div>

        <div id="container">
            <br>
            <form action="fungsiInsert.php" method="POST" enctype="multipart/form-data">
                <div class="formtambah" style="width:50%;">
                    <div class="formnama">
                        <label>Nama :</label>
                        <input class="mb-3 form-control" type="text" name="nama" required><br><br>
                    </div>
                    <div class="formbrand">
                        <label>Brand :</label>
                        <input class="mb-3 form-control" type="text" name="brand" required><br><br>
                    </div>
                    <div class="formKategori">
                        <label>Kategori :</label>
                        <input class="mb-3 form-control" type="text" name="kategori" required><br><br>
                    </div>
                    <div class="formharga">
                        <label>Harga :</label>
                        <input class="mb-3 form-control" type="int" name="harga" required><br><br>
                    </div>



                    <div class="gambarr">
                        <img id="blah" style="width:100px;height:100px;" src="images/blank.jpg" alt="your image" required /><br><br>
                        <input type="file" name="foto" onchange="readURL(this);" required />
                    </div>
                </div>
                <br>
                <br>


                <input style="width:50%;margin-left:25%;" class="btn w3-green" type="submit" name="upload" value="Tambahkan"></input>
                <br><br><br>
                <a class="btn btn-danger" style="width:15%;" href="tubes.php">Cancel</a>
            </form>



        </div>


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
            <br>
        </div>
        <br>


    </div>






</body>

</html>