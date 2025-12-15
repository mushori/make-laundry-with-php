<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
}
include 'header.php';
?>

<div class="alert alert-success">
    <h4>Selamat Datang, Bro Rizky!</h4>
    <p>Ini adalah halaman admin laundry kamu. Pilih menu di atas untuk mengelola data.</p>
</div>

<?php include 'footer.php'; ?>