<?php $this->load->view('admin/inc/header') ?>

<body>

    <div class="container" style="margin-top: 50px; ">
        <div class="row">
            <!-- Form with validation -->
            <div class="col s12 m6 offset-m3">
                <div class="card-panel">
                    <?= $this->session->flashdata('message'); ?>
                    <h4 class="header2 center">Silahkan Login!</h4>
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <form class="col s12" method="post" action="<?= base_url('auth') ?>">

                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">email</i>
                                        <input id="email" name="email" type="email" value="<?php echo set_value('email'); ?>" class="validate">
                                        <label for="email">Email</label>
                                        <?= form_error('email', '<small class="red-text ml-3">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock_outline</i>
                                        <input id="password" name="password" type="password" class="validate">
                                        <label for="password">Password</label>
                                        <?= form_error('password', '<small class="red-text ml-3">', '</small>') ?>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn waves-effect waves-light center" type="submit" name="action">Login
                                            <!-- <i class="material-icons right">send</i> -->
                                        </button>
                                    </div>
                                </div>

                                <p class="center">Belum punya akun ? <a href="<?= base_url('user/tambahuser') ?>">Silahkan Daftar</a> </p>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php $this->load->view('admin/inc/footer') ?>