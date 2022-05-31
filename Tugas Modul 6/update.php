<?php
include 'koneksi.php';
$nip =$_POST['nip'];
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$jk =$_POST['JK'];
$tm =$_POST['TM'];
$agm =$_POST['agm'];
$pt =$_POST['PT'];

mysqli_query($koneksi,"update dosen set NIP='$nip',Nama='$nama',Alamat='$alamat', Jenis Kelamin='$JK', Tahun Masuk='$tm', Agama='$agm', Pendidikan Terakhir='$pt' where Id='$id'");

header("location:index.php");
?>
