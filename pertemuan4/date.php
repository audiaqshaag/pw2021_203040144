<?php
    // Date
    // Untuk menampilkan tanggal dengan format tertentu
    // echo date ("l,d-m-y");

    echo time();
    echo date ("l",mktime(0,0,0,8,25,1985));

    //echo mktime(0,0,0,0,0,0);
    //jam,menit,detik,bulan,tanggal,tahun

    //strtotime
    echo date("l",strtotime("25 aug 1985"));
?>