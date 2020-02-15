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
                        <h5>Data Materi</h5>
                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="<?= base_url('materi/tambahmateri') ?>">
                        Tambah Data
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
    <!--start container-->
    <div class="container">
        <table class="bordered striped">
            <thead>
                <tr>
                    <th>Pertemuan</th>
                    <th>Penjelasan Pertemuan</th>
                    <th>Gambar</th>
                    <th>Link Video</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php foreach ($materi as $materi) : ?>
                <tbody>
                    <tr>
                        <td><?= $materi->pertemuan ?></td>
                        <td><?= $materi->penjelasan_pertemuan ?></td>
                        <td> <img src="<?= base_url('assets/admin/images/') . $materi->gambar ?>" alt=""> </td>
                        <td><?= $materi->link_video ?></td>
                        <td>
                            <a href="<?= base_url('materi/hapusmateri/'); ?><?= $materi->id_materi; ?>" class="waves-effect waves-light btn-small red-text" onclick="return confirm('Yakin ingin menghapus ? ');"><i class="material-icons left">delete</i></a>
                            <a href="<?= base_url('materi/editmateri/'); ?><?= $materi->id_materi; ?>" class="waves-effect waves-light btn-small green-text"><i class="material-icons left">edit</i></a>
                        </td>
                    </tr>

                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</section>