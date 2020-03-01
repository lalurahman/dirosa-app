<section id="content">
    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->

        <div class="container">
            <div class="row">
                <div class="col s10 m6 l6">
                    <h5 class="breadcrumbs-title"></h5>
                    <ol class="breadcrumbs pt-4">
                        <h5>Edit Data Materi</h5>

                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn waves-effect waves-light breadcrumbs-btn right" href="<?= base_url('materi') ?>">
                        Kembali
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
    <!--start container-->
    <div class="container">
        <form class="col s12" method="post" action="<?= base_url('materi/editmateri/').$materi['id_materi']  ?>">
            <div class="row">
                <div class="input-field col s8 offset-s1">
                    <input id="id_materi" name="id_materi" value="<?= $materi['id_materi'] ?>" type="hidden" >
                    <input id="pertemuan" name="pertemuan" value="<?= $materi['pertemuan'] ?>" type="text">
                    <label for="pertemuan">Pertemuan</label>
                    <?= form_error('pertemuan', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8 offset-s1">
                    <textarea id="textarea1" name="penjelasan_pertemuan" class="materialize-textarea"><?= $materi['penjelasan_pertemuan'] ?></textarea>
                    <label for="textarea1">Penjelasan Pertemuan</label>
                    <?= form_error('penjelasan_pertemuan', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s8 offset-s1">
                    <input id="link_video" name="link_video" type="text" value="<?= $materi['link_video']; ?>">
                    <label for="link_video">Link video</label>
                    <?= form_error('link_video', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>

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