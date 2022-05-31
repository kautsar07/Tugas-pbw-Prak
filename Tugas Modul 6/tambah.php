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
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>TAMBAH DATA DOSEN</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>NIP</td>
                <td><input type="number" name="nip"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="enum" name="JK"></td>
            </tr>
            <tr>
                <td>Tahun Masuk</td>
                <td><input type="number" name="TM"></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agm"></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td><input type="text" name="PT"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>