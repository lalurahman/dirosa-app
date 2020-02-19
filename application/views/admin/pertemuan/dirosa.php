<!--card widgets start-->
<?= $this->session->flashdata('message'); ?>
<div id="card-widgets">
    <div class="row">
        <?php $no = 1; ?>
        <?php foreach ($materi as $materi) : ?>
            <div class="col s12 m8 l8">

                <div class="card teal">
                    <div class="card-content white-text">
                        <span class="card-title"><?= $materi->pertemuan ?></span>
                        <iframe src="<?= $materi->link_video ?>" width="100%" height="400px" frameborder="0" class="mb-2"></iframe>
                        <p class="mb-2"><?= $materi->penjelasan_pertemuan ?></p>

                        <?php if ($progress_belajar_aktiv == 1) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa01.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 1 bagian 1</p>
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
                                    <p class="center">Audio Pertemuan 1 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa01b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 2) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa02.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 2 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa02.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa02b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 2 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa02b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 3) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa03.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 3 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa03.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa03b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 3 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa03b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 4) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa04.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 4 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa04.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa04b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 4 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa04b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa04c.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 4 bagian 3</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa04c.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa04d.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 4 bagian 4</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa04d.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 5) : ?>
                        <?php elseif ($progress_belajar_aktiv == 6) : ?>
                        <?php elseif ($progress_belajar_aktiv == 7) : ?>
                        <?php elseif ($progress_belajar_aktiv == 8) : ?>
                        <?php elseif ($progress_belajar_aktiv == 9) : ?>
                        <?php elseif ($progress_belajar_aktiv == 10) : ?>
                        <?php elseif ($progress_belajar_aktiv == 11) : ?>
                        <?php elseif ($progress_belajar_aktiv == 12) : ?>
                        <?php elseif ($progress_belajar_aktiv == 13) : ?>
                        <?php elseif ($progress_belajar_aktiv == 14) : ?>
                        <?php elseif ($progress_belajar_aktiv == 15) : ?>
                        <?php elseif ($progress_belajar_aktiv == 16) : ?>
                        <?php elseif ($progress_belajar_aktiv == 17) : ?>
                        <?php elseif ($progress_belajar_aktiv == 18) : ?>
                        <?php elseif ($progress_belajar_aktiv == 19) : ?>
                        <?php elseif ($progress_belajar_aktiv == 20) : ?>
                        <?php endif; ?>

                        <?php if ($cek_tugas && $cek_tugas['status'] == 'Belum Diperiksa') : ?>
                            <p>Tugas sedang diproses, silahkan cek menu<a href="">Tugas</a></p>
                        <?php elseif ($cek_tugas['status'] == 'Belum Lulus') : ?>
                            <p>Silahkan kirim file rekaman hasil belajar anda pada pertemuan ini!</p>
                            <?php echo form_open_multipart('tugas/tambahTugas') ?>
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
                            <input type="hidden" name="id_materi" value="<?= $materi->id_materi ?>">
                            <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
                            <div class="col s4">
                                <button class="btn waves-effect waves-light right green accent-4" type="submit" name="btn_edit">Kirim
                                    <i class="material-icons right">send</i>
                                </button>
                                </form>
                            </div>
                        <?php elseif ($cek_tugas['status'] == 'Lulus') : ?>
                            <p>Anda Telah Lulus di pertemuan ini, Silahkan lanjut belajar!</p>
                        <?php else : ?>
                            <p>Silahkan kirim file rekaman hasil belajar anda pada pertemuan ini!</p>
                            <?php echo form_open_multipart('tugas/tambahTugas') ?>
                            <div class="input-field col s8">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Berkas</span>
                                        <input type="file" name="berkas" accept="mp3">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" name="nama_berkas" type="text" value="">
                                    </div>
                                </div>
                                
                            </div>
                    <?= form_error('nama_berkas', '<small class="red-text">', '</small>') ?>
                            <input type="hidden" name="id_materi" value="<?= $materi->id_materi ?>">
                            <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
                            <div class="col s4">
                                <button class="btn waves-effect waves-light right green accent-4" type="submit" name="btn_edit">Kirim
                                    <i class="material-icons right">send</i>
                                </button>
                                </form>
                            </div>
                        <?php endif; ?>
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