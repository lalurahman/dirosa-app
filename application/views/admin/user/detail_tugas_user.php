<section id="content">
  <!--breadcrumbs start-->
  <div id="breadcrumbs-wrapper">
    <!-- Search for small screen -->

    <div class="container">
      <div class="row">
        <div class="col s10 m6 l6">
          <h5 class="breadcrumbs-title"></h5>
          <ol class="breadcrumbs pt-4">
            <h5>Detail Tugas Saya</h5>

          </ol>
        </div>
        <div class="col s2 m6 l6">
        </div>
      </div>
    </div>
  </div>
  <!--breadcrumbs end-->
  <!--start container-->
  <div class="container mt-2">
    <form class="col s12" method="post" action="">
      <!-- <input type="hidden" value="<?= $user['id_ustadz']; ?>" name="id_ustadz"> -->
      <input type="hidden" value="<?= $detail_tugas_user['id_materi'] + 1;  ?>" name="id_materi">
      <input type="hidden" value="<?= $detail_tugas_user['id_user'];  ?>" name="id_user">
      <div class="row">
        <div class="col s12 m6">
          <div class="input-field col s12">
            <input id="nama_pengguna" name="nama_pengguna" type="text" value="<?= $detail_tugas_user['nama_user']; ?>" readonly>
            <label for="nama_pengguna">Nama Pengguna</label>
            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
          </div>
          <div class="input-field col s12">
            <input id="pertemuan" name="pertemuan" type="text" value="<?= $detail_tugas_user['pertemuan']; ?>" readonly>
            <label for="pertemuan">Pertemuan</label>
            <?= form_error('pertemuan', '<small class="text-danger pl-3">', '</small>') ?>
          </div>
          <div class="input-field col s12">
            <input id="status" name="status" type="text" value="<?= $detail_tugas_user['status']; ?>" readonly>
            <label for="status">Status</label>
            <?= form_error('status', '<small class="text-danger pl-3">', '</small>') ?>
          </div>
          <div class="input-field col s12">
            <p>Tugas</p>
          </div>
          <div class="input-field col s12 ">
            <audio controls>
              <source src="<?= base_url('assets/tugas/') . $detail_tugas_user['link_tugas']; ?>" width="100%" type="audio/mp3">
            </audio>
          </div>
        </div>
        <div class="col s12 m6">

          <div class="input-field col s12">
            <input id="penilaian" name="penilaian" type="number" value="<?= $detail_tugas_user['penilaian'] ?>" readonly>
            <label for="penilaian">Nilai</label>
            <?= form_error('penilaian', '<small class="text-danger pl-3">', '</small>') ?>
          </div>

          <div class="input-field col s12">
            <label for="komentar">Komentar</label>
            <textarea id="komentar" name="komentar" class="materialize-textarea" readonly><?= $detail_tugas_user['komentar']  ?></textarea>
            <?= form_error('komentar', '<small class="red-text left">', '</small>'); ?>
          </div>

          <div class="input-field col s12">
            <?php if ($detail_tugas_user['penilaian'] == 0) {
              echo "Belum Diperiksa";
            }else{
              echo "Diperiksa Oleh : Ust.". $detail_tugas_user['nama_ustadz'];
            } ?>
            

          </div>


        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <a class="btn waves-effect waves-light center" href="<?= base_url('user/tugas') ?>">Kembali
          </a>
        </div>
      </div>


  </div>


  </form>
  </div>
</section>

<script>
  $(document).ready(function() {
    $('.datePicker').datePicker();

  });
</script>