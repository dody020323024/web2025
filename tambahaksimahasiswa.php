<?php
include "koneksi.php";
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggallahir= $_POST["tanggallahir"];
$telp = $_POST["telp"];
$email = $_POST["email"];
$id_prodi = $_POST["id_prodi"];

$query ="INSERT INTO mahasiswa (nim, nama, tanggallahir, telp, email, id_prodi) Values ('$nim','$nama','$tanggallahir','$telp','$email','$id_prodi')";
mysqli_query($conn,$query);
header("location: index.php");
?>