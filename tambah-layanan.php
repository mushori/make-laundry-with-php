<?php include 'header.php'; ?>
<div class="card mt-4">
    <div class="card-header">Tambah Layanan</div>
    <div class="card-body">
        <form action="proses-tambah-layanan.php" method="POST">
            <div class="mb-3">
                <label>Nama Layanan</label>
                <input type="text" name="nama_layanan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Satuan (Kg/Pcs)</label>
                <input type="text" name="satuan" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="layanan.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>