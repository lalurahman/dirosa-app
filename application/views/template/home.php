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
                    </ul>
                    <ul id="nav-mobile" class="side-nav">
                        <li><a href="#intro">Tentang Dirosa</a></li>
                        <li><a href="<?= base_url('auth') ?>">Mulai Belajar</a></li>
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
                        <p class="light">Dengan belajar Al-Quran dengan metode dirosa, tidak membutuhkan waktu yang lama untuk belajar.</p>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="center promo promo-example">
                        <!-- <i class=""></i>mdi-social-group -->
                        <i class="material-icons">done</i>
                        <h5 class="promo-caption">20 Kali Pertemuan</h5>
                        <p class="light">Belajar Al-Qur'an dengan metode dirosa hanya membutuhkan waktu 20 kali pertemuan.</p>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="center promo promo-example">
                        <!-- <i class="mdi-hardware-desktop-windows"></i> -->
                        <i class="material-icons">done</i>
                        <h5 class="promo-caption">Untuk Orang Dewasa</h5>
                        <p class="light">Metode belajar ini sangat cocok apabila digunakan oleh orang dewasa yang baru belajar Al-Qur'an.</p>
                    </div>
                </div>

            </div>
            <a href="<?= base_url('auth') ?>" class="btn gradient-45deg-light-blue-cyan">mulai belajar</a>
        </div>
    </div>

    <!--Parallax-->
    <div class="section">
        <div class="parallax-container">
            <div class="parallax"><img src="<?= base_url('assets/template/') ?>img/quran2.jpg">
            </div>
            <div class="row">
                <div class="col s12 m6 offset-m3 center">
                    <h5 class="center white-text mb-9">Saat ini belajar dirosa menjadi sangat mudah, dengan adanya aplikasi berbasis progressive web apps (PWA) belajar dapat dilakukan hanya dalam genggaman. berikut cara memasang aplikasi dirosa ke dalam smartphone :</h5>
                </div>
            </div>

            <div class="row center mt-5">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/_ZGOEFtai7c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    </div>
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