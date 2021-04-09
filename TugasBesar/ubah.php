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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Skateshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
        .inptz {
            margin-left: 20px;
        }
    </style>

</head>

<body>


    <div class="isi w3-animate-top">
        <div id="header">
            <h2>HauHau Skateshop</h2>
        </div>

        <div id="container">


            <form action="insert.php" method="POST" enctype="multipart/form-data">
                Nama : <input class="mb-3" type="text" name="nama"><br><br>
                Brand :<input class="inptz" style="margin-left:5.7%" type="text" name="brand"><br><br>
                Kategori :<input class="inptz" style="margin-left:4.7%" type="text" name="kategori"><br><br>
                Harga :<input class="inptz" style="margin-left:5.7%" type="int" name="harga"><br><br>
                <BR></BR>
                <img id="blah" style="width:100px;height:100px" src="#" alt="your image" /><br><br>
                <input type="file" name="foto" onchange="readURL(this);" />
                <br>
                <br>
                <input onclick="window.location='tubes.php'" type="submit" name="upload" value="Tambahkan"></input>
            </form>



        </div>


        <br>

        <div id=" footer">


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