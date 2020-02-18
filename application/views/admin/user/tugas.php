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
                        <h5>Daftar Tugas Saya</h5>
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
        <table class="bordered striped ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pertemuan</th>
                    <th>Nilai</th>
                    <th>Status</th>

                    <th>Lihat Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <?php foreach ($tugas_user as $tugas_user) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $tugas_user['pertemuan'] ?></td>
                        <td><?= $tugas_user['penilaian'] ?></td>
                        <td><?= $tugas_user['status'] ?></td>
                        <td>
                            <a href="<?= base_url('user/detailtugasuser/' . $tugas_user['id_tugas']); ?>" class="waves-effect waves-light btn-small blue-text"><i class="material-icons left">remove_red_eye</i></a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>