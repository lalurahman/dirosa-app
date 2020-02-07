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
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
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
    <link href="<?= base_url('assets/admin/') ?>vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <!-- <link href="<?= base_url('assets/admin/') ?>vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet"> -->
    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
                h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }
    </script>
</head>


<body onload="startTime()">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color gradient-45deg-light-blue-cyan">
                <div class="nav-wrapper">
                    <ul class="left">
                        <li>
                            <h1 class="logo-wrapper">
                                <a href="<?= base_url('admin/admincontroller') ?>" class="brand-logo darken-1">
                                    <img src="<?= base_url('assets/admin/') ?>images/logo/materialize-logo.png" alt="materialize logo">
                                    <span class="logo-text hide-on-med-and-down">DirosApp</span>
                                </a>
                            </h1>
                        </li>
                    </ul>

                    <ul class="right hide-on-med-and-down">


                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                                <i class="material-icons">notifications_none
                                    <small class="notification-badge pink accent-2">5</small>
                                </i>
                            </a>
                        </li>
                        <li style="margin-right: 20px;">
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                                <span class="avatar-status avatar-online">
                                    <img src="<?= base_url('assets/admin/') ?>images/avatar/avatar-7.png" alt="avatar">
                                    <i></i>
                                </span>
                            </a>
                        </li>

                    </ul>
                    <!-- translation-button -->

                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                        <li>
                            <h6>NOTIFICATIONS
                                <span class="new badge">5</span>
                            </h6>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                        </li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                        </li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                        </li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                        </li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                        </li>
                    </ul>
                    <!-- profile-dropdown -->
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">face</i> Profile</a>
                        </li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">settings</i> Settings</a>
                        </li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">live_help</i> Help</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">lock_outline</i> Lock</a>
                        </li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">keyboard_tab</i> Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>

    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">