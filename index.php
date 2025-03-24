<?php
include "koneksi.php";

$query = "SELECT * FROM mahasiswa";
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
          </tr>
          <?php endforeach?>
                </tr>
      
        </tbody>
    </table>
</body>
</html>