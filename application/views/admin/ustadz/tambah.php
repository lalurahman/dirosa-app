<section id="content">
    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->

        <div class="container">
            <div class="row">
                <div class="col s10 m6 l6">
                    <h5 class="breadcrumbs-title"></h5>
                    <ol class="breadcrumbs pt-4">
                        <h5>Tambah Data Ustadz</h5>

                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn waves-effect waves-light breadcrumbs-btn right" href="<?= base_url('ustadz') ?>">
                        Kembali
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
    <!--start container-->
    <div class="container">
        <form class="col s12" method="post" action="<?= base_url('ustadz/tambahustadz') ?>">
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
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>

                </div>
            </div>
            <div class="row">
                <div class="input-field col s8 offset-s1">
                    <input id="password1" name="password1" type="password">
                    <label for="password1">Password</label>
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>

                </div>
            </div>

            <div class="row">
                <div class="input-field col s8 offset-s1">
                    <input id="password2" name="password2" type="password">
                    <label for="password2">Konfirmasi Password</label>
                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>

                </div>
            </div>

            <div class="row">

                <div class="row">
                    <div class="input-field col s8 offset-s1">
                        <button class="btn waves-effect waves-light center" type="submit">Tambah Data
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