<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">


<div class="mt-3">
    <form action="<?= base_url('barang/simpanbarang') ?>" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tempat</label>
            <input type="text" name="nama_barang" class="form-control" id="exampleFormControlInput1" placeholder="Tempat">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Lama Kerja(bulan)</label>
            <input type="number" name="harga_barang" class="form-control" id="exampleFormControlInput1" placeholder="lama kerja">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Gaji</label>
            <input type="number" name="stok" class="form-control" id="exampleFormControlInput1" placeholder="gaji">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control" id="exampleFormControlInput1" placeholder="keterangan"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
</div>