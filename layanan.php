<?php
session_start();
include 'header.php';
include 'koneksi.php';
?>
<div class="card mt-4">
    <div class="card-header bg-primary text-white">Data Layanan Laundry</div>
    <div class="card-body">
        <a href="tambah-layanan.php" class="btn btn-sm btn-success mb-3">+ Tambah Layanan</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Layanan</th>
                    <th>Harga</th>
                    <th>Satuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM layanan");
                while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_layanan']; ?></td>
                    <td>Rp <?php echo number_format($d['harga']); ?></td>
                    <td><?php echo $d['satuan']; ?></td>
                    <td>
                        <a href="hapus-layanan.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus layanan ini?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include 'footer.php'; ?>