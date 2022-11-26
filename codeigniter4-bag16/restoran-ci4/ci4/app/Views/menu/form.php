<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h1> UPLOAD IMAGE </h1>

<form action="<?= base_url('/admin/menu/insert') ?>" method="post" enctype="multipart/form-data">
    Gambar : <input type="file" name="gambar" required id="">
    <br>
    <input type="submit" name="simpan" value="SIMPAN" id="">
</form>

<?= $this->endSection() ?>