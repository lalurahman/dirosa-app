<section id="content">
    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->

        <div class="container">
            <div class="row">
                <div class="col s10 m6 l6">
                    <h5 class="breadcrumbs-title"></h5>
                    <ol class="breadcrumbs pt-4">
                        <h5>Ubah Data Kelas</h5>

                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn waves-effect waves-light breadcrumbs-btn right" href="<?= base_url('kelas') ?>">
                        Kembali
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
    <!--start container-->
    <div class="container">
        <form class="col s12" method="post" action="<?= base_url('kelas/ubah/').$kelas['id_progress_belajar']  ?>">
            <div class="row">
                <div class="input-field col s8 offset-s1">
                    <input id="id_progress_belajar" name="id_progress_belajar" value="<?= $kelas['id_progress_belajar'] ?>" type="hidden" >
                    <input id="nama_user" name="nama_user" value="<?= $kelas['nama_user'] ?>" type="text" readonly>
                    <label for="nama_user">Nama Pengguna</label>
                    <?= form_error('pertemuan', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="input-field col s8 offset-s1">
                    <select name="nama_ustadz" onchange="document.getElementById('id_ustadz').value =  (this.options[this.selectedIndex].getAttribute('idustadz') );">
                        <option idustadz="" value="" disabled selected>Pilih Ustadz</option>
                        <?php foreach ($ustadz as $row): ?>
                        <option value="<?= $row['nama']; ?>"  idustadz="<?= $row['id_ustadz']; ?>"  <?php if ($row['id_ustadz']  == $kelas['id_ustadz']) echo "selected"; ?>>Ust. <?= $row['nama']; ?></option>
                        <?php endforeach; ?>
                        <br>
                        
                      </select>
                      <label>ustadz yang mengajar</label>
                      <?= form_error('jk', '<small class="red-text">', '</small>') ?>
                    </div>
                  </div>
                  <input class="form-control form-control-sm" type="hidden" name="id_ustadz" id="id_ustadz" > 

            <div class="row">

                <div class="row">
                    <div class="input-field col s8 offset-s1">
                        <button class="btn waves-effect waves-light center" type="submit">Ubah Data
                        </button>
                    </div>
                </div>
            </div>


        </form>
    </div>
</section>

<script>
    $(document).ready(function() {
        // $('.datePicker').datePicker();
        $('#textarea1').val('New Text');
        // M.textareaAutoResize($('#textarea1'));
    });
</script>