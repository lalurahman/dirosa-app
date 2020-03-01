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
                    <?php if($jumlah_materi < 21): ?>
                    <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="<?= base_url('materi/tambahmateri') ?>">
                        Tambah Data
                    </a>
                    <?php endif; ?>
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
                    <th>Pertemuan</th>
                    <th>Penjelasan Pertemuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materi as $materi) : ?>
                    <tr>
                        <td><?= $materi->pertemuan ?></td>
                        <td><?= $materi->penjelasan_pertemuan ?></td>
                        <td>
                            <a href="<?= base_url('materi/editmateri/'); ?><?= $materi->id_materi; ?>" class="waves-effect waves-light btn-small green-text"><i class="material-icons left">edit</i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                </tbody>
        </table>
    </div>
</section>