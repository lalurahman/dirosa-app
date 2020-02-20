<!--card widgets start-->
<div id="card-widgets">
    <div class="row">
        <div class="col s12 m8 l8">
            <div id="profile-card" class="card">
                <div class="card-image waves-effect waves-block waves-light blue lighten-1">
                </div>
                <div class="card-content">
                    <img src="<?= base_url('assets/img/users/') . $user['foto'] ?>" alt="" class="circle responsive-img activator card-profile-image white  z-depth-2">

                    <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right" href="<?= base_url('ustadz/editustadz/') . $ustadz->id_ustadz; ?>">
                        <i class="material-icons">edit</i>
                    </a>
                    <span class="card-title activator grey-text text-darken-4 mt-2"><?= $user['nama'] ?></span>
                    <p>
                        <p><i class="material-icons blue-text">work</i> <?= $user['pekerjaan'] ?> </p>
                        <p><i class="material-icons blue-text">email</i> <?= $user['email'] ?> </p>
                        <p><i class="material-icons blue-text">portrait</i> <?= $user['jk'] ?> </p>
                        <p><i class="material-icons blue-text">date_range</i> <?= $user['tempat_lahir'] . ", " . date("d-m-Y", strtotime($user['tanggal_lahir'])); ?> </p>
                        <p><i class="material-icons blue-text">pin_drop</i> <?= $user['alamat'] ?> </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--card widgets end-->