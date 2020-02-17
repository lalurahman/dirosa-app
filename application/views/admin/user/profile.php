<!--card widgets start-->
<div id="card-widgets">
    <div class="row">
        <div class="col s12 m8 l8">
            <div id="profile-card" class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?= base_url('assets/admin/') ?>images/gallary/3.png" alt="user bg">
                </div>
                <div class="card-content">
                    <img src="<?= base_url('assets/admin/') ?>images/avatar/avatar-7.png" alt="" class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">
                    <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                        <i class="material-icons">edit</i>
                    </a>
                    <span class="card-title activator grey-text text-darken-4 mt-2"><?= $user['nama'] ?></span>
                    <p>
                        <p><i class="material-icons">work</i> <?= $user['pekerjaan'] ?> </p>
                        <p><i class="material-icons">email</i> <?= $user['email'] ?> </p>
                        <p><i class="material-icons">portrait</i> <?= $user['jk'] ?> </p>
                        <p><i class="material-icons">date_range</i> <?= $user['tempat_lahir']. ", ".date("d-m-Y", strtotime($user['tanggal_lahir'])); ?> </p>
                        <p><i class="material-icons">pin_drop</i> <?= $user['alamat'] ?> </p>

                </div>
                <!-- <div class="card-reveal">
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
                        </div> -->
            </div>
        </div>
    </div>
</div>
<!--card widgets end-->