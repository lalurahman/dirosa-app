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
                        <h5>Data Kelas</h5>

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
                    <th>Nama Ustadz</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($kelas as $row) : ?>
                    <tr>
                        <td><?= $row['nama_user'] ?></td>
                        <td <?php if(!$row['nama_ustadz']){ echo "style='color:red'";} ?>>
                          <?php
                            if ($row['nama_ustadz']) {
                              echo $row['nama_ustadz'] ;
                            }else{
                              echo "Belum ada";
                            }
                         ?>
                         </td>
                        <td>
                            <a href="<?= base_url('kelas/ubah/'); ?><?=  $row['id_progress_belajar']; ?>" class="waves-effect waves-light btn-small blue-text"><i class="material-icons left">edit</i></a>
                        </td>
                    </tr>

                    <?php endforeach; ?>
                </tbody>
        </table>
        
    </div>
</section>