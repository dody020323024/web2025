<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

$nim = $_GET['nim'];
$querymahasiswa = "SELECT * FROM mahasiswa WHERE nim = '$nim'";

$datamahasiswa = ambildata($querymahasiswa);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit mahasiswa</title>
</head>
<body>
    <h1>edit data  mahasiswa </h1>
    <form action="editaksimahasiswa.php" method="post">
 <table>
    <tr>
        <td>NIM</td>
        <td><input type="text"name="nim" value="<?= $datamahasiswa[0]['nim'] ?>" readonly></td>
    </tr>
    <tr>
        <td>nama</td>
        <td><input type="text"name="nama" value="<?= $datamahasiswa[0]['nama'] ?>"></td>
    </tr>
    <tr>
        <td>tanggallahir</td>
        <td><input type="date"name="tanggallahir" value="<?= $datamahasiswa[0]['tanggallahir'] ?>"></td>
    </tr>
    <tr>
        <td>telp</td>
        <td><input type="text"name="telp" value="<?= $datamahasiswa[0]['telp'] ?>"></td>
    </tr>
    <tr>
        <td>email</td>
        <td><input type="email"name="email" value="<?= $datamahasiswa[0]['email'] ?>"></td>
    </tr>
    <tr>
        <td>prodi</td>
        <td>
         <select name="id_prodi" id="">
            <?php foreach ($data as $d) :?>
         <option value = <?php echo $d['id']; ?>
            <?= $d ['id'] == $datamahasiswa[0]['id_prodi'] ? 
            "selected" : "" ?>
             ><?php echo $d['nama']; ?> </option>
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