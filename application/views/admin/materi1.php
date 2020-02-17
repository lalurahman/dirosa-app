<!--card widgets start-->
<?= $this->session->flashdata('message'); ?>
<div id="card-widgets">
    <div class="row">
        <?php $no = 1; ?>
        <?php foreach ($materi as $materi) : ?>
            <div class="col s12 m8 l8">

                <div class="card teal">
                    <div class="card-content white-text">
                        <span class="card-title">Pertemuan Ke - <?= $no++ ?></span>
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
        <div class="col s12 m4 l4">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <!-- <span class="card-title">
                        <h4>Pertemuan</h4>
                    </span> -->
                    <div class="collection">
                        <?php $i=1; while($i<=20): ?>
                        <?php if($i == $progress_belajar_aktiv): ?>
                            <a href="<?php echo base_url('materi/pertemuan/').$i ?>" class="collection-item blue darken-4 white-text active">Pertemuan ke <?php echo $i ?></a>
                        <?php elseif($i <= $progress_belajar['id_materi']):  ?>
                                <a href="<?php echo base_url('materi/pertemuan/').$i ?>" class="collection-item blue  white-text">Pertemuan ke <?php echo $i ?></a>
                            <?php else: ?>
                                <a  class="collection-item grey black-text no-select" style="cursor: not-allowed;">Pertemuan ke <?php echo $i ?></a>
                            <?php endif ?>
                        <?php $i++; endwhile; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--card widgets end-->

<script>
    $(document).ready(function() {
        $('.materialboxed').materialbox();
    });
</script>