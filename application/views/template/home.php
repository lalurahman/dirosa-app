<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta name="theme-color" content="#2196F3">
    <title>Material UI One Page Theme</title>

    <!-- CSS  -->
    <link href="<?= base_url('assets/template/') ?>min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url('assets/template/') ?>min/custom-min.css" type="text/css" rel="stylesheet">
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
                    <a href="#" id="logo-container" class="brand-logo"><b>DirosApp</b></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#intro">Tentang Dirosa</a></li>
                        <!-- <li><a href="#work">Work</a></li> -->
                        <li><a href="#team">Hubungi Kami</a></li>
                        <li><a href="#contact">Mulai Belajar</a></li>
                        <!-- <li><a href="https://github.com/joashp/material-design-template" target="_blank">Download</a></!-->
                    </ul>
                    <ul id="nav-mobile" class="side-nav">
                        <li><a href="#intro">Tentang Dirosa</a></li>
                        <!-- <li><a href="#work">Work</a></li> -->
                        <li><a href="#team">Team</a></li>
                        <li><a href="#contact">Kontak</a></li>
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
                    <b class="is-visible">Al-Quran</b>
                    <b>Mudah</b>
                    <b>Cepat</b>
                </span>
            </h1>
        </div>
    </div>

    <!--Intro and service-->
    <div id="intro" class="section scrollspy">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h4 class="center header text_h2">DIROSA <span class="span_h2">(Pendidikan Al-Qur’an Orang Dewasa) </span>adalah sebuah metode belajar Al-Qur’an yang sangat efektif disusun dan didesain khusus untuk orang dewasa agar bisa dengan cepat membaca Al-Qur’an dengan <span class="span_h2">baik, lancar, dan benar</span> sesuai dengan kaidah ilmu tajwid.</h4>
                </div>

                <div class="col s12 m4 l4">
                    <div class="center promo promo-example">
                        <i class="mdi-image-flash-on"></i>
                        <h5 class="promo-caption">Waktu Belajar Yang Cepat</h5>
                        <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="center promo promo-example">
                        <i class="mdi-social-group"></i>
                        <h5 class="promo-caption">20 Kali Pertemuan</h5>
                        <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="center promo promo-example">
                        <i class="mdi-hardware-desktop-windows"></i>
                        <h5 class="promo-caption">Pertemuan Sekali Sepekan</h5>
                        <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Parallax-->
    <div class="parallax-container">
        <div class="parallax"><img src="<?= base_url('assets/template/') ?>img/parallax1.png"></div>
    </div>

    <!--Team-->
    <div class="section scrollspy" id="team">
        <div class="container">
            <h2 class="header text_b">Hubungi Kami</h2>
            <div class="row">
                <div class="col s12 m3">
                    <div class="card card-avatar">
                        <div class="waves-effect waves-block waves-light">
                            <img class="activator" src="<?= base_url('assets/template/') ?>img/avatar1.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Flash <br />
                                <small><em><a class="red-text text-darken-1" href="#">CEO</a></em></small></span>
                            <p>
                                <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                    <i class="fa fa-twitter-square"></i>
                                </a>
                                <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                    <i class="fa fa-google-plus-square"></i>
                                </a>
                                <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card card-avatar">
                        <div class="waves-effect waves-block waves-light">
                            <img class="activator" src="<?= base_url('assets/template/') ?>img/avatar2.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Cat Woman<br />
                                <small><em><a class="red-text text-darken-1" href="#">Designer</a></em></small>
                            </span>
                            <p>
                                <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                    <i class="fa fa-twitter-square"></i>
                                </a>
                                <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                    <i class="fa fa-google-plus-square"></i>
                                </a>
                                <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card card-avatar">
                        <div class="waves-effect waves-block waves-light">
                            <img class="activator" src="<?= base_url('assets/template/') ?>img/avatar3.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                Capt. America <br />
                                <small><em><a class="red-text text-darken-1" href="#">CMO</a></em></small></span>
                            <p>
                                <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                    <i class="fa fa-twitter-square"></i>
                                </a>
                                <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                    <i class="fa fa-google-plus-square"></i>
                                </a>
                                <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card card-avatar">
                        <div class="waves-effect waves-block waves-light">
                            <img class="activator" src="<?= base_url('assets/template/') ?>img/avatar4.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Robin<br />
                                <small><em><a class="red-text text-darken-1" href="#">Developer</a></em></small></span>
                            <p>
                                <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                    <i class="fa fa-twitter-square"></i>
                                </a>
                                <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                    <i class="fa fa-google-plus-square"></i>
                                </a>
                                <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer id="contact" class="page-footer default_color scrollspy">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <form class="col s12" action="contact.php" method="post">
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="mdi-action-account-circle prefix white-text"></i>
                                <input id="icon_prefix" name="name" type="text" class="validate white-text">
                                <label for="icon_prefix" class="white-text">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="mdi-communication-email prefix white-text"></i>
                                <input id="icon_email" name="email" type="email" class="validate white-text">
                                <label for="icon_email" class="white-text">Email-id</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="mdi-editor-mode-edit prefix white-text"></i>
                                <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text"></textarea>
                                <label for="icon_prefix2" class="white-text">Message</label>
                            </div>
                            <div class="col offset-s7 s5">
                                <button class="btn waves-effect waves-light red darken-1" type="submit">Submit
                                    <i class="mdi-content-send right white-text"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">joashpereira.com</h5>
                    <ul>
                        <li><a class="white-text" href="http://www.joashpereira.com/">Home</a></li>
                        <li><a class="white-text" href="http://www.joashpereira.com/blog">Blog</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Social</h5>
                    <ul>
                        <li>
                            <a class="white-text" href="https://www.behance.net/joashp">
                                <i class="small fa fa-behance-square white-text"></i> Behance
                            </a>
                        </li>
                        <li>
                            <a class="white-text" href="https://www.facebook.com/joash.c.pereira">
                                <i class="small fa fa-facebook-square white-text"></i> Facebook
                            </a>
                        </li>
                        <li>
                            <a class="white-text" href="https://github.com/joashp">
                                <i class="small fa fa-github-square white-text"></i> Github
                            </a>
                        </li>
                        <li>
                            <a class="white-text" href="https://www.linkedin.com/in/joashp">
                                <i class="small fa fa-linkedin-square white-text"></i> Linkedin
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright default_color">
            <div class="container">
                Made by <a class="white-text" href="http://joashpereira.com">Joash Pereira</a>. Thanks to <a class="white-text" href="http://materializecss.com/">materializecss</a>
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="<?= base_url('assets/template/') ?>min/plugin-min.js"></script>
    <script src="<?= base_url('assets/template/') ?>min/custom-min.js"></script>

</body>

</html>