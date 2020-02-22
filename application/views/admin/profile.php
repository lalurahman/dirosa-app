<!--card widgets start-->

<?= $this->session->flashdata('message'); ?>
<div id="card-widgets">
    <div class="row">
        <div class="col s12 m8 l8">
            <div id="profile-card" class="card">
                <div class="card-image waves-effect waves-block waves-light blue lighten-1">
                </div>
                <div class="card-content">
                    <img src="<?= base_url('assets/img/users/') . $user['foto'] ?>" alt="" class="circle responsive-img activator card-profile-image z-depth-2 rounded-circle center-cropped" style="width: 60px; height: 60px;">
                    <!-- <img src="<?= base_url('assets/img/users/') . $user['foto'] ?>" alt="" class="circle responsive-img activator card-profile-image z-depth-2" style="width: 60px; height: 60px; background-position: center center; background-repeat: no-repeat; overflow: hidden;"> -->

                    <a href="<?= base_url('user/editprofile'); ?>" class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                        <i class="material-icons">edit</i>
                    </a>
                    <span class="card-title activator grey-text text-darken-4 mt-2"><?= $user['nama'] ?></span>
                    <p><i class="material-icons red-text">email</i> <?= $user['email'] ?> </p>
                    <p><i class="material-icons blue-text">date_range</i> Terdaftar Sejak : <?= date('d-m-Y', strtotime($user['date_created']));  ?> </p>

                </div>
            </div>
        </div>
    </div>
</div>
<!--card widgets end-->