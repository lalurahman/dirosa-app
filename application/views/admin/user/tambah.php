<section id="content">
    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->

        <div class="container">
            <div class="row">
                <div class="col s10 m6 l6">
                    <h5 class="breadcrumbs-title"></h5>
                    <ol class="breadcrumbs pt-4">
                        <h5>Tambah Data Pengguna</h5>

                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn waves-effect waves-light breadcrumbs-btn right" href="<?= base_url('user') ?>">
                        Kembali
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
    <!--start container-->
    <div class="container">
        <form class="col s12" method="post" action="<?= base_url('user/tambahuser') ?>">
            <div class="row">
                <div class="input-field col s8 offset-s1">
                    <input id="name" name="nama" type="text">
                    <label for="first_name">Nama Lengkap</label>
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8 offset-s1">
                    <input id="email" name="email" type="email">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8 offset-s1">
                    <input id="password" name="password1" type="password">
                    <label for="password">Password</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s8 offset-s1">
                    <input id="password2" name="passwrod2" type="password">
                    <label for="password2">Konfirmasi Password</label>
                </div>
            </div>

            <div class="row">

                <div class="row">
                    <div class="input-field col s8 offset-s1">
                        <button class="btn waves-effect waves-light center" type="submit">Daftar
                        </button>
                    </div>
                </div>
            </div>


        </form>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('.datePicker').datePicker();
    });
</script>