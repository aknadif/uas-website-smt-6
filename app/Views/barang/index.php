<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="row">
<div class="col">
<div class="container">
<h1 class="text-center">Data Barang</h1>

<!-- Tambah Barang -->

<?php if(session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-warning mt-4 alert-dismissible fade show" role="alert"> 
    <?= session()->getFlashdata('pesan'); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
    </div>
<?php endif; ?>
<div class="tambah">
<a href="<?= base_url('/barang/create');?>" type="button" class="btn btn-tambah btn-sm">Tambah Barang</a>
</div>
        <table class="table">
            <thead class="thead">
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
                <a href="<?= base_url('/barang'); ?>/<?= $b['id']; ?>" type="button" class="btn btn-primary btn-sm">Detail</a>
                <a href="<?= base_url('/barang/ubah'); ?>/<?= $b['id']; ?>" type="button" class="btn btn-warning btn-sm">Ubah</a>

                <form action="<?= base_url('/barang/delete'); ?>/<?= $b['id']; ?>" method="post" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus ini?');"> Hapus</button>
                </form>

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
