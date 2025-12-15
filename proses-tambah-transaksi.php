<?php
include 'koneksi.php';

$tgl = $_POST['tgl_transaksi'];
$pelanggan = $_POST['id_pelanggan'];
$layanan = $_POST['id_layanan'];
$qty = $_POST['qty'];
$status = $_POST['status_pembayaran'];

// Cari harga layanan dulu buat hitung total
$data_layanan = mysqli_query($koneksi, "SELECT harga FROM layanan WHERE id='$layanan'");
$l = mysqli_fetch_assoc($data_layanan);
$harga_per_kilo = $l['harga'];

// Hitung total harga otomatis
$total = $harga_per_kilo * $qty;

mysqli_query($koneksi, "INSERT INTO transaksi VALUES('', '$tgl', '$pelanggan', '$layanan', '$qty', '$total', '$status')");

header("location:transaksi.php");
?>