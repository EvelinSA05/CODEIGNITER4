<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<?php
    echo session()->getFlashdata('info');
?>

<div class="col">
    <h1> INSERT DATA </h1>
</div>

<div class="col-8">
    <form action="<?= base_url() ?>/admin/kategori/insert" method="post">
        <div class="form-group">
            <label for="Kategori">Kategori</label>
            <input type="text" name="kategori" required class="form-control">
        <br>
        </div>
        <div class="form-group">
            <label for="Keterangan">Keterangan</label>
            <input type="text" name="keterangan" required class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="simpan" value="SIMPAN" id="">
        </div>
    </form>
</div>

<?= $this->endSection() ?>