<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <!--card stats start-->
        <div id="card-stats">
            <div class="row mt-1">
                <div class="col s12 m6 l3">
                    <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text">
                        <div class="padding-4">
                            <div class="col s7 m7">
                                <i class="material-icons background-round mt-5">people</i>
                                <p>Ustadz</p>
                            </div>
                            <div class="col s5 m5 right-align">
                                <h5 class="mb-0">690</h5>
                                <p class="no-margin">New</p>
                                <p>6,00,00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text">
                        <div class="padding-4">
                            <div class="col s7 m7">
                                <i class="material-icons background-round mt-5">people</i>
                                <p>Pengguna</p>
                            </div>
                            <div class="col s5 m5 right-align">
                                <h5 class="mb-0">1885</h5>
                                <p class="no-margin">New</p>
                                <p>1,12,900</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text">
                        <div class="padding-4">
                            <div class="col s7 m7">
                                <i class="material-icons background-round mt-5">person</i>
                                <p>Admin</p>
                            </div>
                            <div class="col s5 m5 right-align">
                                <h5 class="mb-0">80%</h5>
                                <p class="no-margin">Growth</p>
                                <p>3,42,230</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text">
                        <div class="padding-4">
                            <div class="col s12 m12 center">
                                <h3 class="mt-5" id="txt"></h3>
                                <?php date_default_timezone_set('Asia/Jakarta'); ?>
                                <p class=""><?= date('l, d F Y') ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--card widgets start-->
        <div id="card-widgets">
            <div class="row">
                <div class="col s12 m4 l4">
                    <div id="profile-card" class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= base_url('assets/admin/') ?>images/gallary/3.png" alt="user bg">
                        </div>
                        <div class="card-content">
                            <img src="<?= base_url('assets/admin/') ?>images/avatar/avatar-7.png" alt="" class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">
                            <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                                <i class="material-icons">edit</i>
                            </a>
                            <span class="card-title activator grey-text text-darken-4">Roger Waters</span>
                            <p>
                                <i class="material-icons">perm_identity</i> Project Manager</p>
                            <p>
                                <i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989</p>
                            <p>
                                <i class="material-icons">email</i> yourmail@domain.com</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Roger Waters
                                <i class="material-icons right">close</i>
                            </span>
                            <p>Here is some more information about this card.</p>
                            <p>
                                <i class="material-icons">perm_identity</i> Project Manager</p>
                            <p>
                                <i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989</p>
                            <p>
                                <i class="material-icons">email</i> yourmail@domain.com</p>
                            <p>
                                <i class="material-icons">cake</i> 18th June 1990
                            </p>
                            <p>
                            </p>
                            <p>
                                <i class="material-icons">airplanemode_active</i> BAR - AUS
                            </p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--card widgets end-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->