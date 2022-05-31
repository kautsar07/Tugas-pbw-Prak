<?php
    include 'koneksi.php';
    $nip =$_POST['nip'];
    $nama =$_POST['nama'];
    $alamat =$_POST['alamat'];
    $jk =$_POST['JK'];
    $tm =$_POST['TM'];
    $agm =$_POST['agm'];
    $pt =$_POST['PT'];

    mysqli_query($koneksi,"insert into dosen values('','$nip','$nama','$alamat','$jk','$tm','$agm','$pt')");

    header("location:index.php");
?>