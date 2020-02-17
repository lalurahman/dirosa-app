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
                                <p class="center">Audio</p>
                                <audio controls>
                                    <source src="<?= base_url('assets/audio/dirosa01.mp3') ?>" width="100%" type="audio/ogg">
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
                    <ul type="circle">
                        <li>
                            <h5><a style="color: currentColor;opacity: 0.5;text-decoration: none;" class="white-text" href="">Pertemuan 1</a></h5>
                        </li>

                        <li>
                            <h5><a class="white-text" href="">Pertemuan 2</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 3</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 4</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 5</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 6</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 7</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 8</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 9</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 10</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 11</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 12</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 13</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 14</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 15</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 16</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 17</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 18</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 19</a></h5>
                        </li>
                        <li>
                            <h5><a class="white-text" href="">Pertemuan 20</a></h5>
                        </li>
                    </ul>
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