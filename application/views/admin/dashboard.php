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
                                <h5 class="mb-0"><?php echo $jumlah_ustadz ?></h5>
                                <p class="no-margin">Orang</p>
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
                                <h5 class="mb-0"><?php echo $jumlah_user ?></h5>
                                <p class="no-margin">Orang</p>
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
                                <h5 class="mb-0"><?php echo $jumlah_admin ?></h5>
                                <p class="no-margin">Orang</p>
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

        <!--card widgets end-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->