<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">


<div class="mt-3">
    <form action="<?= base_url('pelanggan/simpanpelanggan') ?>" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pendidikan</label>
            <input type="text" name="nama_pelanggan" class="form-control" id="exampleFormControlInput1" placeholder="pendidikan">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tempat</label>
            <input type="text" name="no_tlp" class="form-control" id="exampleFormControlInput1" placeholder="Tempat">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Keterangan </label>
            <textarea name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="keterangan"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
</div>  