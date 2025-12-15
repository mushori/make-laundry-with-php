<?php
session_start();
include 'header.php';
include 'koneksi.php';
?>
<div class="card mt-4">
    <div class="card-header bg-warning">Data Transaksi Laundry</div>
    <div class="card-body">
        <a href="tambah-transaksi.php" class="btn btn-sm btn-primary mb-3">+ Transaksi Baru</a>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Pelanggan</th>
                <th>Layanan</th>
                <th>Berat/Qty</th>
                <th>Total Harga</th>
                <th>Status</th>
            </tr>
            <?php
            // Join 3 tabel sekaligus biar datanya lengkap
            $query = "SELECT transaksi.*, pelanggan.nama, layanan.nama_layanan 
                      FROM transaksi 
                      JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id 
                      JOIN layanan ON transaksi.id_layanan = layanan.id";
            $data = mysqli_query($koneksi, $query);
            $no = 1;
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['tgl_transaksi']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nama_layanan']; ?></td>
                <td><?php echo $d['qty']; ?></td>
                <td>Rp <?php echo number_format($d['total_harga']); ?></td>
                <td>
                    <span class="badge bg-<?php echo ($d['status_pembayaran'] == 'Lunas') ? 'success' : 'danger'; ?>">
                        <?php echo $d['status_pembayaran']; ?>
                    </span>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
<?php include 'footer.php'; ?>