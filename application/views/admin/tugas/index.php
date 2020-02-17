<section id="content">
    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->

        <div class="container">
            <div class="row">
                <div class="col s10 m6 l6">
                    <h5 class="breadcrumbs-title"></h5>
                    <ol class="breadcrumbs pt-4">
                        <h5>Data Tugas</h5>

                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="<?= base_url('tugas/tambahtugas') ?>">
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
                    <th>Link tugas</th>
                    <th>Nama User</th>
                    <th>Nama Ustadz</th>
                    <th>Judul Materi</th>
                    <th>Penilaian</th>
                    <th>Komentar</th>
                    <th>Status</th>
                    <th>Tanggal Periksa</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            <?php foreach ($tugas as $tugas) : ?>
                <tbody>
                    <tr>
                        <td><?= $tugas->link_tugas ?></td>
                        <td><?= $tugas->id_user ?></td>
                        <td><?= $tugas->id_ustadz ?></td>
                        <td><?= $tugas->pertemuan ?></td>
                        <td><?= $tugas->penilaian ?></td>
                        <td><?= $tugas->komentar ?></td>
                        <td><?= $tugas->status ?></td>
                        <td><?= $tugas->tanggal_periksa ?></td>
                        <td>
                            <a href="" class="new badge blue">edit</a>
                            <a href="" class="new badge red">hapus</a>
                        </td>
                    </tr>

                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</section>