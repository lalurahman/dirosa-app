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
                        <h5>Data Tugas</h5>

                    </ol>
                </div>
                <div class="col s2 m6 l6">
                   
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
                    <th>Nama Pengguna</th>
                    <!-- <th>Nama Ustadz</th> -->
                    <th>Judul Materi</th>
                    <!-- <th>Penilaian</th>
                    <th>Komentar</th> -->
                    <th>Status</th>
                    <th>Tanggal Masuk</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1 ?>
                <?php foreach($tugas as $tugas) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $tugas['nama_user'] ?></td>
                    <!-- <td>Satriadi</td> -->
                    <td><?= $tugas['pertemuan'] ?></td>
                    <!-- <td>0</td>
                    <td>0</td> -->
                    <td><?= $tugas['status'] ?></td>
                    <td><?= $tugas['date_created'] ?></td>
                    <td>
                        <a href="<?= base_url('tugas/detailtugas/'.$tugas['id_tugas']); ?>" class="waves-effect waves-light btn-small blue-text" ><i class="material-icons left">remove_red_eye</i></a>
                    </td>
                </tr>

                <?php endforeach; ?>
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