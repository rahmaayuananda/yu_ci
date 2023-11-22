            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <h1 class="mt-4">Pendaftaran</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url('Pendaftaran')?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Pendaftaran</li>
                    </ol>
                    </div>
            <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800"><?php echo $judul2; ?></h1>
                <div class="row">
                    <div class="col-md-6"><a href="<?=base_url()?>Pendaftaran/tambah"
                    class="btn btn-info mb-2">Pendafataran</a></div>
                    <div class="col-md-12">
                    <?= $this->session->flashdata('message'); ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>Email</td>
                                    <td>Prodi</td>
                                    <td>Angkatan</td>
                                    <td>Gambar</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pendaftaran as $us) : ?>
                                <tr>
                                    <td><?=$i; ?></td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['email']; ?></td>
                                    <td><?= $us['prodi']; ?></td>
                                    <td><?= $us['angkatan']; ?></td>
                                    <td><img src="<?= base_url('assets/assets/img/profile/') . $user['gambar']; ?>" 
                                    style="width: 100px;" class="img-thumbnail"></td>
                                    <td>
                                        <a href="<?= base_url('Pendaftaran/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                                        <a href="<?= base_url('Pendaftaran/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                