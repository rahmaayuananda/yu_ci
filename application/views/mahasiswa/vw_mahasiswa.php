<main id="main" class="main">
<div class="pagetitle">
    <h1>Mahasiswa</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active">Mahasiswa</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

</main><!-- End #main -->

  <div class="container-fluid">
      <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
      <div class="row">
          <div class="col-md-6"><a href="<?= base_url()?>Mahasiswa/tambah" class="btn btn-info mb-2">Tambah Mahasiswa</a></div>
          <div class="col-md-12">
            <?= $this->session->flashdata('message');?>
              <table class="table">
                  <thead>
                      <tr>
                          <td>No</td>
                          <td>Nama</td>
                          <td>Nim</td>
                          <td>Email</td>
                          <td>Prodi</td>
                          <td>Aksi</td>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $i = 1;?>
                      <?php foreach ($mahasiswa as $us) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $us['nama'];?></td>
                            <td><?= $us['nim'];?></td>
                            <td><?= $us['email'];?></td>
                            <td><?= $us['prodi'];?></td>
                            <td>
                                <a href="<?= base_url('Mahasiswa/hapus/').$us['id']; ?>" class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('Mahasiswa/edit/').$us['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('Mahasiswa/detail/').$us['id']; ?>" class="btn btn-info">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach;?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  </body>

  <br><br><br><br><br><br><br><br><br>