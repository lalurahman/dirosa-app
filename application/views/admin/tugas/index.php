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
                    <th>No</th>
                    <th>Nama User</th>
                    <!-- <th>Nama Ustadz</th> -->
                    <th>Judul Materi</th>
                    <th>Penilaian</th>
                    <th>Komentar</th>
                    <th>Status</th>
                    <th>Tanggal Masuk</th>

                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Lalu Abdurrahman</td>
                    <!-- <td>Satriadi</td> -->
                    <td>Pertemuan 1</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Belum Diperiksa</td>
                    <td><?= date("Y/m/d H:iP") ?></td>
                    <td>
                        <a href="<?= base_url('tugas/hapustugas/'); ?>" class="waves-effect waves-light btn-small red-text" onclick="return confirm('Yakin ingin menghapus ? ');"><i class="material-icons left">delete</i></a>
                        <a href="<?= base_url('tugas/edittugas/'); ?>" class="waves-effect waves-light btn-small green-text"><i class="material-icons left">edit</i></a>
                    </td>
                </tr>

            </tbody>

            <!-- <?php foreach ($tugas as $tugas) : ?>
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
            <?php endforeach; ?> -->
        </table>
    </div>
</section>