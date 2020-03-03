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
                        <small class="black-text white">Sumber Video dari Youtube Channel: <a href="https://www.youtube.com/watch?v=F7BywK6mVLU&list=PLuIq4XhtbYD6tkPlN5qyaeaSW14ljqQKb" target="_blank" class="red-text">Al Kahfi Channel</a></small>
                        <iframe src="<?= $materi->link_video ?>" width="100%" height="400px" frameborder="0" class="mb-2" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe>
                        <p class="mb-2"><?= $materi->penjelasan_pertemuan ?></p>

                        <?php if ($progress_belajar_aktiv == 1) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa01.jpg') ?>" width="100%">
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
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa01b.jpg') ?>" width="100%">
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
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa02.jpg') ?>" width="100%">
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
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa02b.jpg') ?>" width="100%">
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
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa03.jpg') ?>" width="100%">
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
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa03b.jpg') ?>" width="100%">
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
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa04.jpg') ?>" width="100%">
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
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa04b.jpg') ?>" width="100%">
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
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa04c.jpg') ?>" width="100%">
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
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa04d.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 4 bagian 4</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa04d.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 5) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa05.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 5 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa05.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa05b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 5 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa05b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 6) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa06.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 6 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa06.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa06b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 6 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa06b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 7) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa07.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 7 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa07.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa07b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 7 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa07b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 8) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa08.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 8 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa08.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa08b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 8 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa08b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 9) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa09.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 9 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa09.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa09b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 9 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa09b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 10) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa10.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 10 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa10.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa10b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 10 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa10b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa10c.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 10 bagian 3</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa10c.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa10d.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 10 bagian 4</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa10d.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa10e.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 10 bagian 5</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa10e.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 11) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa11.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 11 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa11.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa11b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 11 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa11b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa11c.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 11 bagian 3</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa11c.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 12) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa12.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 12 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa12.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa12b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 12 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa12b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 13) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa13.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 13 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa13.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa13b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 13 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa13b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 14) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa14.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 14 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa14.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa14b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 14 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa14b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 15) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa15.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 15 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa15.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa15b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 15 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa15b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 16) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa16.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 16 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa16.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa16b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 16 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa16b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa16c.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 16 bagian 3</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa16c.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 17) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa17.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 17 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa17.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa17b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 17 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa17b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa17c.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 17 bagian 3</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa17c.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 18) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa18.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 18 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa18.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa18b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 18 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa18b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 19) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa19.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 19 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa19.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa19b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 19 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa19b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php elseif ($progress_belajar_aktiv == 20) : ?>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa20.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 20 bagian 1</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa20.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img data-caption="Klik/Sentuh gambar untuk kembali" class="materialboxed mb-2" src="<?= base_url('assets/img/dirosa/Dirosa20b.jpg') ?>" width="100%">
                                </div>
                                <div class="col s12 m6">
                                    <p class="center">Audio Pertemuan 20 bagian 2</p>
                                    <audio controls>
                                        <source src="<?= base_url('assets/audio/dirosa20b.mp3') ?>" width="100%" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        <?php endif; ?>

                        
                        <?php if ($kelas2['id_ustadz'] == 0): ?>
                            <p>Belum pilih ustadz</a></p>
                            
        <form class="col s12" method="post" action="<?= base_url('kelas/ubah2/').$materi->id_materi  ?>">
                            <div class="row">
                    <input id="id_progress_belajar" name="id_progress_belajar" value="<?= $kelas['id_progress_belajar'] ?>" type="hidden" >
                <div class="input-field col s8 offset-s1">
                    <select name="nama_ustadz" onchange="document.getElementById('id_ustadz').value =  (this.options[this.selectedIndex].getAttribute('idustadz') );">
                        <option idustadz="" value="" disabled selected>Pilih Ustadz</option>
                        <?php foreach ($ustadz as $row): ?>
                        <option value="<?= $row['nama']; ?>"  idustadz="<?= $row['id_ustadz']; ?>"  <?php if ($row['id_ustadz']  == $kelas['id_ustadz']) echo "selected"; ?>>Ust. <?= $row['nama']; ?></option>
                        <?php endforeach; ?>
                        <br>
                        
                      </select>
                      <label>Pilih ustadz</label>
                      <?= form_error('jk', '<small class="red-text">', '</small>') ?>
                    </div>
                  </div>
                  <input class="form-control form-control-sm" type="hidden" name="id_ustadz" id="id_ustadz" > 
                  <div class="row">
                    <div class="input-field col s8 offset-s1">
                        <button class="btn waves-effect waves-light center" type="submit">Kirim
                        </button>
                    </div>
                </div>
                        <?php else: ?>
                            <?php if ($cek_tugas && $cek_tugas['status'] == 'Belum Diperiksa') : ?>
                            <p>Tugas anda sedang diproses!</p>
                        <?php elseif ($cek_tugas['status'] == 'Belum Lulus') : ?>
                            <p>Silahkan kirim file rekaman hasil belajar anda pada pertemuan ini!</p>
                            <?php echo form_open_multipart('tugas/tambahTugas') ?>
                            <div class="input-field col s12 m12">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Audio</span>
                                        <input type="file" name="berkas" accept="audio/*">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" name="nama_berkas" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id_materi" value="<?= $materi->id_materi ?>">
                            <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
                            <div class="col s12 m12 mb-8">
                                <button class="btn waves-effect waves-light green accent-4" type="submit" name="btn_edit">Kirim
                                    <i class="material-icons right">send</i>
                                </button>
                                </form>
                            </div>

                        <?php elseif ($cek_tugas['status'] == 'Lulus') : ?>
                            <p>Anda Telah Lulus di pertemuan ini, Silahkan lanjut belajar!</p>
                        <?php else : ?>
                            <p>Silahkan kirim file rekaman hasil belajar anda pada pertemuan ini!</p>
                            <?php echo form_open_multipart('tugas/tambahTugas') ?>
                            <div class="input-field col s12 m12">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Audio</span>
                                        <input type="file" name="berkas" accept="audio/*">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" name="nama_berkas" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <?= form_error('nama_berkas', '<small class="red-text">', '</small>') ?>
                            <input type="hidden" name="id_materi" value="<?= $materi->id_materi ?>">
                            <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
                            <input type="hidden" name="id_ustadz" value="<?= $kelas['id_ustadz'] ?>">
                            <div class="col s12 m12 mb-8">
                                <button class="btn waves-effect waves-light green accent-4" type="submit" name="btn_edit">Kirim
                                    <i class="material-icons right">send</i>
                                </button>
                                </form>
                            </div>
                        <?php endif; ?>
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