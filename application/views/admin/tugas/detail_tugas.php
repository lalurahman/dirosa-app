<section id="content">
  <!--breadcrumbs start-->
  <div id="breadcrumbs-wrapper">
    <!-- Search for small screen -->

    <div class="container">
      <div class="row">
        <div class="col s10 m6 l6">
          <h5 class="breadcrumbs-title"></h5>
          <ol class="breadcrumbs pt-4">
            <h5>Detail Tugas</h5>

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
    <div class="row">
      <div class="col s12 m6">
        <div class="card blue darken-1">
          <div class="card-content white-text">
            <span class="card-title">Standar Penilaian</span>
            <p>10 - 30 = Kurang Sekali</p>
            <p>31 - 70 = Kurang Baik</p>
            <p>71 - 80 = Cukup Baik</p>
            <p>81 - 99 = Baik Sekali</p>
            <p><small>syarat lulus ke pertemuan berikutnya : nilai > 70</small></p>
          </div>

        </div>
      </div>
    </div>
    <form class="col s12" method="post" action="<?= base_url('tugas/edittugas/') . $detail_tugas['id_tugas'] ?>">
      <input type="hidden" value="<?= $user['id_ustadz']; ?>" name="id_ustadz">
      <input type="hidden" value="<?= $detail_tugas['id_materi'] + 1;  ?>" name="id_materi">
      <input type="hidden" value="<?= $detail_tugas['id_user'];  ?>" name="id_user">
      <div class="row">
        <div class="col s12 m6">
          <div class="input-field col s12">
            <input id="nama_pengguna" name="nama_pengguna" type="text" value="<?= $detail_tugas['nama_user']; ?>" readonly>
            <label for="nama_pengguna">Nama Pengguna</label>
            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
          </div>
          <div class="input-field col s12">
            <input id="pertemuan" name="pertemuan" type="text" value="<?= $detail_tugas['pertemuan']; ?>" readonly>
            <label for="pertemuan">Pertemuan</label>
            <?= form_error('pertemuan', '<small class="text-danger pl-3">', '</small>') ?>
          </div>
          <div class="input-field col s12">
            <input id="status" name="status" type="text" value="<?= $detail_tugas['status']; ?>" readonly>
            <label for="status">Status</label>
            <?= form_error('status', '<small class="text-danger pl-3">', '</small>') ?>
          </div>
          <div class="input-field col s12">
            <p>Tugas</p>
          </div>
          <div class="input-field col s12 ">
            <audio controls>
              <source src="<?= base_url('assets/tugas/') . $detail_tugas['link_tugas']; ?>" width="100%" type="audio/mp3">
            </audio>
          </div>
        </div>
        <div class="col s12 m6">
          <?php if ($detail_tugas['status'] == 'Lulus') : ?>
            <div class="input-field col s12">
              <input id="penilaian" name="penilaian" type="number" value="<?= $detail_tugas['penilaian'] ?>" readonly>
              <label for="penilaian">Nilai</label>
              <?= form_error('penilaian', '<small class="text-danger pl-3">', '</small>') ?>
            </div>

            <div class="input-field col s12">
              <label for="komentar">Komentar</label>
              <textarea id="komentar" name="komentar" class="materialize-textarea" readonly><?= $detail_tugas['komentar']  ?></textarea>
              <?= form_error('komentar', '<small class="red-text left">', '</small>'); ?>
            </div>

            <div class="input-field col s12">
              Diperiksa Oleh : Ust. <?= $detail_tugas['nama_ustadz']  ?>

            </div>

          <?php elseif ($detail_tugas['status'] == 'Belum Lulus') : ?>
            <div class="input-field col s12">
              <input id="penilaian" name="penilaian" type="number" value="<?= $detail_tugas['penilaian'] ?>" readonly>
              <label for="penilaian">Nilai</label>
              <?= form_error('penilaian', '<small class="text-danger pl-3">', '</small>') ?>
            </div>

            <div class="input-field col s12">
              <label for="komentar">Komentar</label>
              <textarea id="komentar" name="komentar" class="materialize-textarea" readonly><?= $detail_tugas['komentar']  ?></textarea>
              <?= form_error('komentar', '<small class="red-text left">', '</small>'); ?>
            </div>

            <div class="input-field col s12">
              <select name="status">
                <option value="" disabled selected>Pilih Status</option>
                <option value="Lulus" <?php if (set_value('status') == "Lulus") echo "selected" ?>>Lulus</option>
                <option value="Belum Lulus" <?php if (set_value('status') == "Belum Lulus") echo "selected" ?>>Belum Lulus</option>
              </select>
              <label>Status</label>
              <?= form_error('jk', '<small class="red-text">', '</small>') ?>
            </div>

            <div class="input-field col s12">
              Diperiksa Oleh : Ust. <?= $detail_tugas['nama_ustadz']  ?>

            </div>
          <?php else : ?>
            <div class="input-field col s12">
              <input id="penilaian" name="penilaian" type="number" value="<?= set_value('penilaian');  ?>">
              <label for="penilaian">Nilai</label>
              <?= form_error('penilaian', '<small class="text-danger pl-3">', '</small>') ?>
            </div>

            <div class="input-field col s12">
              <label for="komentar">Komentar</label>
              <textarea id="komentar" name="komentar" class="materialize-textarea"><?php echo set_value('komentar'); ?></textarea>
              <?= form_error('komentar', '<small class="red-text left">', '</small>'); ?>
            </div>

            <div class="input-field col s12">
              <select name="status">
                <option value="" disabled selected>Pilih Status</option>
                <option value="Lulus" <?php if (set_value('status') == "Lulus") echo "selected" ?>>Lulus</option>
                <option value="Belum Lulus" <?php if (set_value('status') == "Belum Lulus") echo "selected" ?>>Belum Lulus</option>
              </select>
              <label>Status</label>
              <?= form_error('jk', '<small class="red-text">', '</small>') ?>
            </div>
          <?php endif; ?>






        </div>
      </div>
      <?php if ($detail_tugas['status'] == 'Lulus') :  ?>
        <div class="row">
          <div class="input-field col s12">
            <a class="btn waves-effect waves-light center" href="<?= base_url('tugas') ?>">Kembali
            </a>
          </div>
        </div>

      <?php else : ?>
        <div class="row">

          <div class="input-field col s6 m2">
            <a class="btn waves-effect waves-light center" href="<?= base_url('tugas') ?>">Kembali
            </a>
          </div>

          <div class="input-field col s6 m2">
            <button class="btn waves-effect waves-light center blue" type="submit">Evaluasi
            </button>
          </div>
        </div>
      <?php endif; ?>
  </div>


  </form>
  </div>
</section>

<script>
  $(document).ready(function() {
    $('.datePicker').datePicker();

  });
</script>