<?php

include "koneksi.php";

$nim = $_POST["nim"];   
$nama = $_POST["nama"];
$tanggallahir= $_POST["tanggallahir"];
$telp = $_POST["telp"];
$email = $_POST["email"];
$id_prodi = $_POST["id_prodi"];

$query = "UPDATE mahasiswa SET nama = '$nama', tanggallahir = '$tanggallahir', telp = '$telp', email = '$email', id_prodi = '$id_prodi' WHERE nim = '$nim'";
mysqli_query($conn,$query);
header("location: index.php");
?>