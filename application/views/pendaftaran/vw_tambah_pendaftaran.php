<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul;?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Pendaftaran
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control"
                            value="<?= set_value('nama')?>" id="nama" placeholder="nama">
                            <?= form_error('nama','<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="<?= set_value('email')?>" class="form-control"
                            id="email" placeholder="Email">
                            <?= form_error('email','<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <select name="prodi" id="prodi" class="form-control" value="<?= set_value('prodi')?>">
                                <option value="">Pilih Prodi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                            </select>
                            <?= form_error('prodi','<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="angkatan">Angkatan</label>
                            <input type="text" name="angkatan" class="form-control" 
                            value="<?= set_value('angkatan')?>" id="angkatan" placeholder="angkatan">
                            <?= form_error('angkatan','<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar" id="gambar">
                            <label for="gambar" class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <a href="<?= base_url('Pendaftaran')?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Pendaftaran</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>