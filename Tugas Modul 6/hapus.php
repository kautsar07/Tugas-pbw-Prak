<?php
include 'koneksi.php';

$id =$_GET['id'];

mysqli_query($koneksi, "delete from dosen where Id='$id'");

header("location:index.php");
?>