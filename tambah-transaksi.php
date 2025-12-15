<?php 
include 'header.php'; 
include 'koneksi.php';
?>
<div class="card mt-4">
    <div class="card-header">Input Transaksi</div>
    <div class="card-body">
        <form action="proses-tambah-transaksi.php" method="POST">
            <div class="mb-3">
                <label>Tanggal</label>
                <input type="date" name="tgl_transaksi" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label>Pilih Pelanggan</label>
                <select name="id_pelanggan" class="form-select" required>
                    <option value="">- Pilih Pelanggan -</option>
                    <?php
                    $pel = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                    while($p = mysqli_fetch_array($pel)){
                        echo "<option value='$p[id]'>$p[nama]</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label>Pilih Layanan</label>
                <select name="id_layanan" class="form-select" required>
                    <option value="">- Pilih Layanan -</option>
                    <?php
                    $lay = mysqli_query($koneksi, "SELECT * FROM layanan");
                    while($l = mysqli_fetch_array($lay)){
                        echo "<option value='$l[id]'>$l[nama_layanan] - Rp $l[harga]/$l[satuan]</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label>Berat / Jumlah (Qty)</label>
                <input type="number" name="qty" class="form-control" placeholder="Misal: 5" required>
            </div>

            <div class="mb-3">
                <label>Status Pembayaran</label>
                <select name="status_pembayaran" class="form-select">
                    <option value="Belum Lunas">Belum Lunas</option>
                    <option value="Lunas">Lunas</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Transaksi</button>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>