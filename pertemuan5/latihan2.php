<?php
// Pengulangan array
// for /foreach

$angka = [3,2,15,20,11,77,89];

?>

<html>
<style>
    .kotak{
        width:50px;
        height:50px;
        background-color:salmon;
        text-align:center;
        line-height:50px;
        margin:3px;
        float:left;
    }

    .clear {clear: both;}
</style>

<head>

<title>
Latihan 2
</title>

</head>

<body>
    
<?php for($i=0;$i<count($angka);$i++){?>

<div class="kotak"><?php echo $angka[$i];?> </div>

<?php } ?>

<div class="clear"> </div>

<?php foreach($angka as $a) :?>
    <div class="kotak"> <?= $a;  ?></div>
<?php endforeach ?>









</body>

</html>