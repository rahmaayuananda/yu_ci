<br><br><br><br>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Formulir
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Mahasiswa/detail'); ?>" method="POST">
                        <h2 class="card-title"></h2>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <div class="row">
                            <div class="col-md-4">Berkas Syarat</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"></div>
                            <h2>Berkas Syarat</h2>
                            <h4>Berkas Persyaratan dilengkapi setelah melakukan pendafataran</h4>
                            <h6>- Blanko Nilai Tanda Tangan Kepala Sekolah/Guru BK/Wali Kelas</h6>
                            <h6>- Foto/File Scan Rapor Semester I- IV</h6>
                            <h6>- Scan sertifikat prestasi (jika ada) (seluruh sertifikat yang telah di scan disatukan
                                dalam 1 file .pdf)</h6>
                        </div>

                        <div class="row">
                            <div class="col-md-4">Syarat Nilai</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"></div>
                            <h6>- Matematika Semseter 1</h6>
                            <h6>- Matematika Semseter 2</h6>
                            <h6>- Matematika Semseter 3</h6>
                            <h6>- Matematika Semseter 4</h6>
                            <h6>- B.inggris Semseter 1</h6>
                            <h6>- B.inggris Semseter 2</h6>
                            <h6>- Fisika/Ekonomi/Program Keahlian Semseter 1</h6>
                            <h6>- B.inggris Semseter 3</h6>
                            <h6>- Fisika/Ekonomi/Program Keahlian Semseter 2</h6>
                            <h6>- B.inggris Semseter 4</h6>
                            <h6>- Fisika/Ekonomi/Program Keahlian Semseter 3</h6>
                            <h6>- Fisika/Ekonomi/Program Keahlian Semseter 4</h6>
                        </div>

                    </form>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Form_Pendafataran') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<br><br><br><br>