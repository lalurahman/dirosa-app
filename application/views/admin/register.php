<!DOCTYPE html>
<html lang="en">
<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 4.0
	Author: PIXINVENT
	Author URL: https://themeforest.net/user/pixinvent/portfolio
  ================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title><?= $title; ?></title>
    <!-- Favicons-->
    <link rel="icon" href="<?= base_url('assets/admin/') ?>images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <!-- <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png"> -->
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="<?= base_url('assets/admin/') ?>images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="<?= base_url('assets/admin/') ?>css//materialize.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url('assets/admin/') ?>css//style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <!-- <link href="<?= base_url('assets/admin/') ?>css/custom/custom.css" type="text/css" rel="stylesheet"> -->
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <!-- <link href="<?= base_url('assets/admin/') ?>vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"> -->
    <!-- <link href="<?= base_url('assets/admin/') ?>vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet"> -->
</head>


<body>

    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->

    <!-- START WRAPPER -->
    <div class="container">
        <div class="row">
            <!--Basic Form-->
            <div id="basic-form" class="section">
                <div class="row">
                    <div class="col s12 m6 offset-m3">
                        <div class="card-panel">
                            <h4 class="header2 center">Silahkan Daftar</h4>
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
                                            <input id="password" type="password">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select name="jk" id="jk">
                                                <option value="" class="disabled selected">Pilih Jenis Kelamin</option>
                                                <option value="">Laki Laki</option>
                                                <option value="">Perempuan</option>
                                            </select>
                                            <label for="jk">Jenis Kelamin</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="tempat_lahir" type="text">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light right" type="submit" name="action">Daftar
                                                    <!-- <i class="material-icons right">send</i> -->
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="center">Sudah punya akun ? <a href="<?= base_url('admin/auth') ?>">Silahkan Login</a> </p>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Form with icon prefixes -->
        </div>

    </div>



    <!-- jQuery Library -->
    <script type="text/javascript" src="<?= base_url('assets/admin/') ?>vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="<?= base_url('assets/admin/') ?>js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?= base_url('assets/admin/') ?>vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?= base_url('assets/admin/') ?>js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="<?= base_url('assets/admin/') ?>js/custom-script.js"></script>
</body>

</html>