<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA DOSEN</title>
</head>
<body>
    <h2>DATA DOSEN</h2>
    <br/>
    <a href="tambah.php">+ TAMBAH DOSEN</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tahun Masuk</th>
            <th>Agama</th>
            <th>Pendidikan Terakhir</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from dosen");
        while($d = mysqli_fetch_array($data))
        {
            ?>
            <tr>
                <td align="center"><?php echo $no++;?></td>
                <td><?php echo $d['NIP'];?></td>
                <td><?php echo $d['Nama'];?></td>
                <td><?php echo $d['Alamat'];?></td>
                <td><?php echo $d['Jenis Kelamin'];?></td>
                <td><?php echo $d['Tahun Masuk'];?></td>
                <td><?php echo $d['Agama'];?></td>
                <td><?php echo $d['Pendidikan Terakhir'];?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['Id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['Id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

</body>
</html>