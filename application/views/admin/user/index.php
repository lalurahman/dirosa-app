<section id="content">
    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->

        <div class="container">
            <div class="row">
                <?= $this->session->flashdata('message') ?>

                <div class="col s10 m6 l6">
                    <h5 class="breadcrumbs-title"></h5>
                    <ol class="breadcrumbs pt-4">
                        <h5>Data Pengguna</h5>

                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <!-- <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="<?= base_url('admin/tambahadmin') ?>">
                        Tambah Data
                    </a> -->


                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
    <!--start container-->
    <div class="container">
        <table class="bordered striped highlight">
            <thead>
                <tr>
                    <th>Nama Pengguna</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pengguna as $pengguna) : ?>
                    <tr>
                        <td><?= $pengguna->nama ?></td>
                        <td><?= $pengguna->email ?></td>
                        <td>
                            <a href="<?= base_url('user/detailuser/'); ?><?=  $pengguna->id_user ?>" class="waves-effect waves-light btn-small blue-text"><i class="material-icons left">remove_red_eye</i></a>
                            <a href="<?= base_url('user/hapusUser/'); ?><?= $pengguna->id_user; ?>" class="waves-effect waves-light btn-small red-text" onclick="return confirm('Yakin ingin menghapus ? ');"><i class="material-icons left">delete</i></a>
                        </td>
                    </tr>

                    <?php endforeach; ?>
                </tbody>
        </table>
    </div>
</section>