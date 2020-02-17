<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta name="theme-color" content="#2196F3">
    <title><?= $title; ?></title>

    <!-- CSS  -->
    <link href="<?= base_url('assets/template/') ?>min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url('assets/template/') ?>min/custom-min.css" type="text/css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body id="top" class="scrollspy">

    <!-- Pre Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <!--Navigation-->
    <div class="navbar-fixed">
        <nav id="nav_f" class="default_color" role="navigation">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="<?= base_url() ?>" id="logo-container" class="brand-logo"><b>DirosApp</b></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#intro">Tentang Dirosa</a></li>
                        <li><a href="<?= base_url('auth') ?>">Mulai Belajar</a></li>
                        <!-- <li><a href="https://github.com/joashp/material-design-template" target="_blank">Download</a></!-->
                    </ul>
                    <ul id="nav-mobile" class="side-nav">

                        <li><a href="#intro">Tentang Dirosa</a></li>
                        <li><a href="<?= base_url('auth') ?>">Mulai Belajar</a></li>

                        <!-- <li><a href="https://github.com/joashp/material-design-template" target="_blank">Download</a></li> -->
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                </div>
            </div>
        </nav>
    </div>

    <!--Hero-->
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <h1 class="text_h left header cd-headline letters type">
                <span>Belajar</span>
                <span class="cd-words-wrapper waiting">
                    <b class="is-visible">Al-Qur'an</b>
                    <b>Mudah</b>
                    <b>Cepat</b>
                </span>
            </h1>
        </div>
    </div>

    <!--Intro and service-->
    <div class="section" style="margin-bottom: 50px;">
        <div class="container center">
            <div class="row">
                <div class="row scrollspy" id="intro">
                    <div class="col s12 m5">
                        <img src="<?= base_url('assets/template/img/dirosa.jpg') ?>" alt="" width="250">
                    </div>
                    <div class="col s12 m7">
                        <h5 class="center header text_h2" style="line-height: 2">D I R O S A <br> <span class="span_h2">(Pendidikan Al-Qur’an Orang Dewasa) </span>adalah sebuah metode belajar Al-Qur’an yang sangat efektif disusun dan didesain khusus untuk orang dewasa agar bisa dengan cepat membaca Al-Qur’an dengan baik, lancar, dan benar sesuai dengan kaidah ilmu tajwid.</h5>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="center promo promo-example">
                        <!-- <i class="mdi-image-flash-on"></i> -->
                        <i class="material-icons">done</i>
                        <h5 class="promo-caption">Waktu Belajar Yang Cepat</h5>
                        <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="center promo promo-example">
                        <!-- <i class=""></i>mdi-social-group -->
                        <i class="material-icons">done</i>
                        <h5 class="promo-caption">20 Kali Pertemuan</h5>
                        <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="center promo promo-example">
                        <!-- <i class="mdi-hardware-desktop-windows"></i> -->
                        <i class="material-icons">done</i>
                        <h5 class="promo-caption">Pertemuan Sekali Sepekan</h5>
                        <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                    </div>
                </div>

            </div>
            <a href="<?= base_url('admin/admincontroller') ?>" class="btn gradient-45deg-light-blue-cyan">mulai belajar</a>
        </div>
    </div>


    <!--Testimoni-->
    <div class="parallax-container scrollspy" id="testimoni">
        <div class="parallax"><img src="<?= base_url('assets/template/') ?>img/quran2.jpg"></div>
        <div class="container">
            <div class="row">
                <center>
                    <a href="" class="green text-white">belajar Sekarang!</a>
                </center>
            </div>
        </div>


    </div>
    <!-- <div class="section scrollspy">
        <div class="container">
            <h2 class="header center text_h2"> Hubungi Kami </h2>
            <div class="container">
                <div class="col s12 m12 l6">
                    <div class="card-panel">

                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="name" type="text">
                                        <label for="first_name">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="message" class="materialize-textarea"></textarea>
                                        <label for="message">Pesan</label>
                                    </div>
                                    <div class="row center">
                                        <div class="input-field col s12 center">
                                            <button class="btn waves-effect waves-light " type="submit" name="action">Kirim Pesan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--Footer-->
    <footer id="contact" class="page-footer default_color scrollspy">

        <div class="footer-copyright default_color">
            <div class="container">
                STMIK Dipanegara Makassar &copy; <?= date('Y') ?>
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="<?= base_url('assets/template/') ?>min/plugin-min.js"></script>
    <script src="<?= base_url('assets/template/') ?>min/custom-min.js"></script>

</body>

</html>