<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center fw-bold mt-4">Tambah Barang Baru</h1>
            <form action="<?= base_url('/PHP/UTS-Semester-6/public/barang/save');?>" method="post" enctype="multipart/form-data" class="mt-4">
            <?= csrf_field(); ?>
                        <div class="form-group  mb-3">
                            <label for="nama_barang" class="fw-bold">Nama Barang</label>
                            <input name="nama_barang" id='nama_barang' type="text" class="form-control" placeholder="Nama Barang ..">
                        </div>
                        <div class="form-group  mb-3">
                            <label for="harga_jual" class="fw-bold">Harga Jual</label>
                            <input name="harga_jual" id="harga_jual" type="text" class="form-control" placeholder="Harga Jual Barang ..">
                        </div>
                        <div class="form-group  mb-3">
                            <label for="jumlah" class="fw-bold">Jumlah</label>
                            <input name="jumlah" id="jumlah" type="text" class="form-control" placeholder="Jumlah ..">
                        </div>
                <div class="text-end">
                <button type="submit" name="submit" class="btn btn-primary">Create</button>
                </div>													
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>