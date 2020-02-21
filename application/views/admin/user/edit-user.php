<section id="content">
    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->

        <div class="container">
            <div class="row">
                <div class="col s10 m6 l6">
                    <h5 class="breadcrumbs-title"></h5>
                    <ol class="breadcrumbs pt-4">
                        <h5>Edit Data Pengguna</h5>
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
        <!-- <form class="col s8 offset-s1" method="post" action="<?= base_url('ustadz/editustadz') ?>"> -->
        <?= form_open_multipart('user/editprofile') ?>

        <div class="row">
            <div class="input-field col s8 offset-s1">
                <input id="email" name="email" value="<?= $user['email']; ?>" type="email" readonly>
                <label for="email">Email</label>
                <?= form_error('email', '<small class="red-text">', '</small>') ?>

            </div>
        </div>

        <div class="row">
            <div class="input-field col s8 offset-s1">
                <input id="nama" name="nama" value="<?= $user['nama']; ?>" type="text">
                <label for="nama">Nama Lengkap</label>
                <?= form_error('nama', '<small class="red-text">', '</small>') ?>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8 offset-s1">
                <select name="jk">
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>

                    <option value="Laki-laki" <?php if ($user['jk'] == "Laki-laki") echo "selected" ?>>Laki-laki</option>
                    <option value="Perempuan" <?php if ($user['jk'] == "Perempuan") echo "selected" ?>>Perempuan</option>
                </select>
                <label>Jenis Kelamin</label>
                <?= form_error('jk', '<small class="red-text">', '</small>') ?>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8 offset-s1 ">
                <input id="tempat_lahir" name="tempat_lahir" type="text" value="<?= $user['tempat_lahir']; ?>">
                <label for="tempat_lahir">Tempat Lahir</label>
                <?= form_error('tempat_lahir', '<small class="red-text">', '</small>') ?>
            </div>
        </div>

        <div class="row">
            <div class="input col s8 offset-s1 ">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input id="tanggal_lahir" name="tanggal_lahir" type="date" class="" value="<?= $user['tanggal_lahir']; ?>" autocomplete="off">
                <?= form_error('tanggal_lahir', '<small class="red-text left">', '</small>'); ?>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8 offset-s1">
                <input id="alamat" name="alamat" type="text" value="<?= $user['alamat']; ?>">
                <label for="alamat">Alamat</label>
                <?= form_error('alamat', '<small class="red-text">', '</small>') ?>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8 offset-s1">
                <input id="pekerjaan" name="pekerjaan" type="text" value="<?= $user['pekerjaan']; ?>">
                <label for="pekerjaan">Pekerjaan</label>
                <?= form_error('pekerjaan', '<small class="red-text">', '</small>') ?>
            </div>
        </div>

        <div class="row">
            <div class="col s8 offset-s1">
                <img src="<?= base_url('assets/img/users/') . $user['foto'] ?>" alt="" width="100">
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8 offset-s1">
                <div class="file-field input-field">
                    <div class="btn blue">
                        <span>Foto</span>
                        <input type="file" name="foto">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" name="nama_foto" type="text" value="">
                        <input name="nama_foto_lama" type="text" value="<?= $user['foto'] ?>" hidden>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="row">
                <div class="input-field col s8 offset-s1">
                    <button class="btn waves-effect waves-light center green" type="submit">Ubah Profil
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