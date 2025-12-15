<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM layanan WHERE id='$id'");
header("location:layanan.php");
?>