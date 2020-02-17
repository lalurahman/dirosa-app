<!--card widgets start-->
<?= $this->session->flashdata('message'); ?>
<div id="card-widgets">
    <div class="row">
        <?php $no = 1; ?>
        <?php foreach ($materi as $materi) : ?>
            <div class="col s12 m8 l8">

                <div class="card teal">
                    <div class="card-content white-text">
                        <span class="card-title"><?=  $materi->pertemuan ?></span>
                        <iframe src="<?= $materi->link_video ?>" width="100%" height="400px" frameborder="0" class="mb-2"></iframe>
                        <div class="row">
                            <div class="col s12 m6">
                                <img class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa01.jpg') ?>" width="100%">
                            </div>
                            <div class="col s12 m6">
                                <p class="mb-2"><?= $materi->penjelasan_pertemuan ?></p>
                                <hr>
                                <audio controls>
                                    <source src="<?= base_url('assets/audio/dirosa01.mp3') ?>" width="100%" type="audio/mp3">
                                </audio>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <img class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa01b.jpg') ?>" width="100%">
                            </div>
                            <div class="col s12 m6">
                                <audio controls>
                                    <source src="<?= base_url('assets/audio/dirosa01.mp3') ?>" width="100%" type="audio/mp3">
                                </audio>
                            </div>
                        </div>
                        <p>Silahkan kirim file rekaman hasil belajar anda pada pertemuan ini!</p>
                        <?php echo form_open_multipart('tugas/tambahTugas')?>
                        <div class="input-field col s8">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Berkas</span>
                                    <input type="file" name="berkas" accept="doc/docx/pdf">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" name="nama_berkas" type="text" value="">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id_materi" value="<?=  $materi->id_materi ?>">
                        <input type="hidden" name="id_user" value="<?=  $user['id_user'] ?>">
                        <div class="col s4">
                            <button class="btn waves-effect waves-light right green accent-4" type="submit" name="btn_edit">Kirim
                                <i class="material-icons right">send</i>
                            </button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        <?php endforeach; ?>
        <?php $this->load->view('admin/pertemuan/inc/menu') ?>

    </div>
</div>
<!--card widgets end-->

<script>
    $(document).ready(function() {
        $('.materialboxed').materialbox();
    });
</script>