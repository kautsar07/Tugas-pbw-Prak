<?php
    if(isset($_GET['konfirm'])){
        $nama = $_GET['nama'];
        $TTL = $_GET['ttl'];
        $umur = $_GET['umur'];
        $JK = $_GET['JK'];
    
    }
    echo "Nama: ". $nama. 
    "<br> Tempat Tanggal Lahir: ".  $TTL.
    "<br> Umur: ".  $umur.
    "<br> Jenis Kelamin: ".  $JK;
?>