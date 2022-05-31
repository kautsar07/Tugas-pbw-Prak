<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>DATA DOSEN</h2>
    <br />
    <a href="index1.php">KEMBALI</a>
    <br />
    <br />
    <h3>EDIT DATA DOSEN</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from dosen where id ='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>NIP</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['Id']; ?>">
                        <input type="number" name="nip" value="<?php echo $d['NIP']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $d['Nama']; ?>"></td>
                </tr>
                <tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['Alamat']; ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="enum" name="JK" value="<?php echo $d['Jenis Kelamin']; ?>"></td>
                </tr>
                <tr>
                    <td>Tahun Masuk</td>
                    <td><input type="number" name="TM" value="<?php echo $d['Tahun Masuk']; ?>"></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td><input type="text" name="agm" value="<?php echo $d['Agama']; ?>"></td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td><input type="text" name="PT" value="<?php echo $d['Pendidikan Terakhir']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>

</body>

</html>