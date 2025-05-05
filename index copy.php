<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.html");
}
include "koneksi.php";

$query = "SELECT m.*, p.nama prodi FROM `mahasiswa` m JOIN prodi p ON m.id_prodi = p.id";
$data = ambildata($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>
<body>
    <h1>DATA MAHASISWA</h1>
    <br>
    <a href="tambahmahasiswa.php">tambah</a>
    <br>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>prodi</th>
            <th>aksi</th>
        </thead>

        <tbody>
          <?php
          $i = 1;
          foreach ( $data as $d) :?>
          <tr>
            <td><?php echo $i ++; ?></td>
            <td><?php echo $d ["nim"]; ?></td>
            <td><?php echo $d ["nama"]; ?></td>
            <td><?php echo $d ["telp"]; ?></td>
            <td><?php echo $d ["tanggallahir"]; ?></td>
            <td><?php echo $d ["email"]; ?></td>
            <td><?php echo $d ["prodi"]; ?></td>
            
            <td>
            <a href ="editmahasiswa.php?nim=<?=$d['nim'];?>" >mealih </a>|
            <a href= "hapusmahasiswa.php?nim=<?=$d['nim'];?>"
            onclick="return confirm('bujur jue kah ikam neh hendak mehepos?')" >dihepos</a> 
        </td>
          </tr>
          <?php endforeach?>
                </tr>
      
        </tbody>
    </table>
    <a href = "logout.php">keluar</a>
</body>
</html>