<div class="mt-3">
    <form action="<?= base_url('barang/editbarang') ?>" method="POST">
        <input type="hidden" name="barang_id" value="<?= $barang['barang_id'] ?>" <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tempat</label>
        <input type="text" name="nama_barang" class="form-control" id="exampleFormControlInput1" placeholder="tempat" value="<?= $barang['nama_barang'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Lama Kerja(bulan)</label>
    <input type="text" name="harga_barang" class="form-control" id="exampleFormControlInput1" placeholder="lama kerja" value="<?= $barang['harga_barang'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Gaji</label>
    <input type="text" name="stok" class="form-control" id="exampleFormControlInput1" placeholder="gaji" value="<?= $barang['stok'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
    <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $barang['keterangan'] ?></textarea>
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Edit</button>
</div>
</form>
</div>
</div>