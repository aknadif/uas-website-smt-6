<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
        
            <div class="card mt-4">
                <div class="card-body">
                        <div class="table-responsive">  
                            <h2 class="text-center fw-bold mt-2">Detail Barang</h2>
                            <table class="table table-bordered mt-4">  
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Id</label></td>  
                                    <td width="70%"><?= $barang['id']; ?></td>  
                                </tr>  
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Nama</label></td>  
                                    <td width="70%"><?= $barang['nama_barang']; ?></td>  
                                </tr>  
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Harga Jual</label></td>  
                                    <td width="70%"><?= $barang['harga_jual']; ?></td>  
                                </tr>  
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Jumlah</label></td>  
                                    <td width="70%"><?= $barang['jumlah']; ?></td>  
                                </tr>  
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Sisa</label></td>  
                                    <td width="70%"><?= $barang['sisa']; ?></td>  
                                </tr> 
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Tanggal Inputan</label></td>  
                                    <td width="70%"><?= $barang['created_at']; ?></td>  
                                </tr>  
                            </table>
                        </div> 
                        <div class="text-end">
                        <a href="<?= base_url('/PHP/UTS-Semester-6/public/barang');?>" type="button" class="btn btn-secondary btn-sm">Kembali</a>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>