<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
body {
  background-color: #a8dadc;
}
h1 {
  color: #1d3557;
}
label{
    color: #1d3557;  
}
.container {
  width: 800px;
  background-color: #f1faee;
  margin-top: 200px;
  border-radius: 25px;
}
.btn-ubah {
  color: #f1faee;
  background-color: #457b9d;
}
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center fw-bold mt-4">Ubah Data Karyawan</h1>
            <form action="<?= base_url('/KaryawanController/update');?>/<?= $karyawan['id_karyawan']; ?>" method="post" enctype="multipart/form-data" class="mt-4">
            <?= csrf_field(); ?>
            <input type="hidden" name="id" value="<?= $karyawan['id_karyawan']; ?>">
            <div class="form-group  mb-3">
                            <label for="nama_karyawan" class="fw-bold">Nama Karyawan</label>
                            <input name="nama_karyawan" id='nama_karyawan' type="text" class="form-control" placeholder="Nama Karyawan .." required value="<?= $karyawan['nama_karyawan']; ?>">
                        </div>
                        <div class="form-group  mb-3">
                            <label for="NIK" class="fw-bold">NIK</label>
                            <input name="NIK" id='NIK' type="text" class="form-control" placeholder="NIK .." required value="<?= $karyawan['NIK']; ?>">
                        </div>
                        <div class="form-group  mb-3">
                            <label for="alamat_karyawan" class="fw-bold">Alamat</label>
                            <input name="alamat_karyawan" id='alamat_karyawan' type="text" class="form-control" placeholder="Alamat .." required value="<?= $karyawan['alamat_karyawan']; ?>">
                        </div>
                        <div class="form-group  mb-3">
                            <label for="gender_Karyawan" class="fw-bold">Gender</label>
                            <select class="form-select" aria-label="Default select example" name="gender_karyawan" id="gender_karyawan">
                                <option selected>Pilih Level</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group  mb-3">
                            <label for="divisi_karyawan" class="fw-bold">Divisi</label>
                            <input name="divisi_karyawan" id="divisi_karyawan" type="text" class="form-control" placeholder="Divisi .." required value="<?= $karyawan['divisi_karyawan']; ?>">
                        </div>
                        <div class="form-group  mb-3">
                            <label for="level_karyawan" class="fw-bold">Level</label>
                            <select class="form-select" aria-label="Default select example" name="level_karyawan" id="level_karyawan">
                                <option selected>Pilih Level</option>
                                <option value="Admin">Admin</option>
                                <option value="Karyawan">Karyawan</option>
                            </select>
                        </div>

                <div class="text-end">    
                <a href="<?= base_url('/karyawan');?>" type="button" class="btn btn-secondary mb-4">Back</a>
                <button type="submit" name="submit" class="btn btn-ubah mb-4">Ubah</button>
                </div>

                												
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>