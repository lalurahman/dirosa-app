<?php $this->load->view('admin/inc/header') ?>

<body>

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
                                <form class="col s12" method="post" action="<?= base_url('user/tambahuser') ?>">
                                    <div class="input-field col s12">
                                        <input id="nama" name="nama" type="text" value="<?php echo set_value('nama'); ?>">
                                        <label for="nama">Nama Lengkap</label>
                                        <?= form_error('nama', '<small class="red-text">', '</small>') ?>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="email" name="email" type="email" value="<?php echo set_value('email'); ?>">
                                        <label for="email">Email</label>
                                        <?= form_error('email', '<small class="red-text">', '</small>') ?>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="password1" name="password1" type="password">
                                        <label for="password1">Password</label>
                                        <?= form_error('password1', '<small class="red-text">', '</small>') ?>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="password2" name="password2" type="password">
                                        <label for="password2">Konfirmasi Password</label>
                                        <?= form_error('password2', '<small class="red-text">', '</small>') ?>
                                    </div>
                                    <div class="input-field col s12">
                                        <select name="jk">
                                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki" <?php if (set_value('jk') == "Laki-laki") echo "selected" ?>>Laki-laki</option>
                                            <option value="Perempuan" <?php if (set_value('jk') == "Perempuan") echo "selected" ?>>Perempuan</option>
                                        </select>
                                        <label>Jenis Kelamin</label>
                                        <?= form_error('jk', '<small class="red-text">', '</small>') ?>
                                    </div>
                                    
                                    <div class="input-field col s12">
                                        <input type="number" name="usia" id="usia" value="<?php echo set_value('usia'); ?>">
                                        <label for="usia">Usia</label>
                                        <?= form_error('usia', '<small class="red-text">', '</small>') ?>

                                    </div>

                                    <div class="input-field col s12">
                                        <input type="number" name="no_hp" id="no_hp" value="<?php echo set_value('no_hp'); ?>">
                                        <label for="no_hp">Nomor Hp</label>
                                        <?= form_error('no_hp', '<small class="red-text">', '</small>') ?>

                                    </div>

                                    <div class="input-field col s12">
                                        <input id="alamat" name="alamat" type="text" value="<?php echo set_value('alamat'); ?>">
                                        <label for="alamat">Alamat</label>
                                        <?= form_error('alamat', '<small class="red-text">', '</small>') ?>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="pekerjaan" name="pekerjaan" type="text" value="<?php echo set_value('pekerjaan'); ?>">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <?= form_error('pekerjaan', '<small class="red-text">', '</small>') ?>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12 ">
                                            <button class="btn waves-effect waves-light center" type="submit">Daftar
                                                <!-- <i class="material-icons right">send</i> -->
                                            </button>
                                        </div>
                                    </div>
                            </div>
                            <p class="center">Sudah punya akun ? <a href="<?= base_url('auth') ?>">Silahkan Login</a> </p>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Form with icon prefixes -->
    </div>

    </div>

    <?php $this->load->view('admin/inc/footer') ?>

    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker();
            $('select').formSelect();
        });
    </script>