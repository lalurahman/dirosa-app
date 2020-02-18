<!--card widgets start-->

<?= $this->session->flashdata('message'); ?>
<div id="card-widgets">
    <div class="row">
        <div class="col s12 m8 l8">
            <div id="profile-card" class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?= base_url('assets/admin/') ?>images/gallary/10.png" alt="user bg">
                </div>
                <div class="card-content">
                    <img src="<?= base_url('assets/img/users/').$user['foto'] ?>" alt="" class="circle responsive-img activator card-profile-image white  z-depth-2">
                    <a href="<?= base_url(); ?>" class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                        <i class="material-icons">edit</i>
                    </a>
                    <span class="card-title activator grey-text text-darken-4 mt-2"><?= $user['nama'] ?></span>
                        <p><i class="material-icons red-text">email</i> <?= $user['email'] ?> </p>
                        <p><i class="material-icons blue-text">date_range</i> Terdaftar Sejak :  <?= date('d-m-Y', strtotime($user['date_created']));  ?> </p>

                </div>
            </div>
        </div>
    </div>
</div>
<!--card widgets end-->