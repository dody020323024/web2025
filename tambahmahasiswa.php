<?php
session_start();
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah mahasiswa</title>
</head>
<body>
    <h1>tambah data mahasiswa</h1>
    <form action="tambahaksimahasiswa.php" method="post">
 <table>
    <tr>
        <td>NIM</td>
        <td><input type="text"name="nim"></td>
    </tr>
    <tr>
        <td>nama</td>
        <td><input type="text"name="nama"></td>
    </tr>
    <tr>
        <td>tanggallahir</td>
        <td><input type="date"name="tanggallahir"></td>
    </tr>
    <tr>
        <td>telp</td>
        <td><input type="text"name="telp"></td>
    </tr>
    <tr>
        <td>email</td>
        <td><input type="emai"name="email"></td>
    </tr>
    <tr>
        <td>prodi</td>
        <td>
         <select name="id_prodi" id="">
            <?php foreach ($data as $d) :?>
         <option value = <?php echo $d['id']; ?> ><?php echo $d['nama']; ?> </option>
         <?php endforeach ?>
</select>
</td>
        </tr>
        <tr>
        <td><input type= "reset" value="batal" />
        <td><input type= "submit" value="simpan" />
    </tr>
    <tr>
<td><a href = "index.php" >kembali</td>
    </tr>
    
</table>
</form>

</body>
</html>