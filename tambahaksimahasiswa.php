<?php


include "koneksi.php";

$nim = $_POST["nim"];
$password = $_POST["password"];
$nama = $_POST["nama"];
$tanggallahir = $_POST["tanggallahir"];
$telp = $_POST["telp"];
$email = $_POST["email"];
$id_prodi = $_POST["id_prodi"];

$namafile = $_FILES["foto"]["name"];
$tmp_name = $_FILES["foto"]["tmp_name"];

$ekstensifoto = explode('.', $namafile);
$ekstensifoto = strtolower(end($ekstensifoto));
$namafilebaru = $nim;
$namafilebaru .= '.';
$namafilebaru .= $ekstensifoto;
move_uploaded_file($tmp_name, "assets/img/" . $namafilebaru);

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO mahasiswa (nim, password, nama, tanggallahir, telp, email, id_prodi, foto) VALUES
 ('$nim', '$hashedPassword', '$nama', '$tanggallahir', '$telp', '$email', '$id_prodi', '$namafilebaru')";

mysqli_query($conn, $query);
header("location: index.php");
