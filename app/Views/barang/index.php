<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-4">
<h1 class="text-center">Data Barang</h1>

<!-- Tambah Barang -->
<div class="text-center mt-2">
<a href="<?= base_url('/PHP/UTS-Semester-6/public/barang/create');?>" type="button" class="btn btn-primary btn-sm">Tambah Barang</a>
</div>

<?php if(session()->getFlashdata('pesan')) : ?>
<div class="alert alert-success mt-4" role="alert">
  <?= session()->getFlashdata('pesan'); ?>
</div>
<?php endif; ?>

    <div class="row mt-4">
        <div class="col">
        <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Id Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga Jual</th>
                <th scope="col">Jumlah</th>
                <th scope="col" class="text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach($barang as $b) : ?>
                <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $b['id']; ?></td>
                <td><?= $b['nama_barang']; ?></td>
                <td><?= $b['harga_jual']; ?></td>
                <td><?= $b['jumlah']; ?></td>
                <td class="text-center">
                <a href="<?= base_url('/PHP/UTS-Semester-6/public/barang'); ?>/<?= $b['id']; ?>" type="button" class="btn btn-primary btn-sm">Detail</a>
                <a href="#" type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ubahModal">Ubah</a>
                <a href="#" type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">Hapus</a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>
