<?php
include 'koneksi.php';
$nama = $_POST['nama_layanan'];
$harga = $_POST['harga'];
$satuan = $_POST['satuan'];

mysqli_query($koneksi, "INSERT INTO layanan VALUES('', '$nama', '$harga', '$satuan')");
header("location:layanan.php");
?>