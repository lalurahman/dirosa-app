<!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details blue lighten-1">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="<?= base_url('assets/img/users/') . $user['foto'] ?>" alt="" class=" rounded-circle center-cropped" style="width: 65px; height: 65px;">
                </div>
                <div class="col col s8 m8 l8">

                    <a class="btn-flat waves-effect waves-light white-text profile-btn" href="#"><?= $user['nama'] ?></a>
                    <?php if ($this->session->userdata['role_id'] == 1) : ?>
                        <p class="user-roal">Admin</p>
                    <?php endif; ?>

                    <?php if ($this->session->userdata['role_id'] == 2) : ?>
                        <p class="user-roal">Ustadz</p>
                    <?php endif; ?>

                    <?php if ($this->session->userdata['role_id'] == 3) : ?>
                        <p class="user-roal">Pengguna</p>
                    <?php endif; ?>

                </div>
            </div>
        </li>
        <li class="no-padding">
            <ul class="collapsible" data-collapsible="accordion">


                <?php if ($this->session->userdata['role_id'] == 1) : ?>
                    <li class="bold">
                        <a href="<?= base_url('admin') ?>" class="waves-effect waves-cyan">
                            <i class="material-icons">pie_chart_outlined</i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                <?php endif; ?>

                <li class="bold">
                    <a href="<?= base_url('user/profile') ?>" class="waves-effect waves-cyan">
                        <i class="material-icons">person</i>
                        <span class="nav-text">Profile</span>
                    </a>
                </li>

                <?php if ($this->session->userdata['role_id'] == 1) : ?>
                    <li class="bold">
                        <a href="<?= base_url('admin/dataadmin') ?>" class="waves-effect waves-cyan">
                            <i class="material-icons">peoples</i>
                            <span class="nav-text">Data Admin</span>
                        </a>
                    </li>

                    <li class="bold">
                        <a href="<?= base_url('ustadz') ?>" class="waves-effect waves-cyan">
                            <i class="material-icons">peoples</i>
                            <span class="nav-text">Data Ustadz</span>
                        </a>
                    </li>
                    <li class="bold">
                        <a href="<?= base_url('user') ?>" class="waves-effect waves-cyan">
                            <i class="material-icons">peoples</i>
                            <span class="nav-text">Data Pengguna</span>
                        </a>
                    </li>

                    <li class="bold">
                        <a href="<?= base_url('materi') ?>" class="waves-effect waves-cyan">
                            <i class="material-icons">library_books</i>
                            <span class="nav-text">Data Materi</span>
                        </a>
                    </li>

                    <li class="bold">
                        <a href="<?= base_url('kelas') ?>" class="waves-effect waves-cyan">
                            <i class="material-icons">folder_shared</i>
                            <span class="nav-text">Data Kelas</span>
                        </a>
                    </li>
                <?php endif; ?>



                <?php if ($this->session->userdata['role_id'] == 3) : ?>
                    <li class="bold">
                        <a href="<?= base_url('user/tugas') ?>" class="waves-effect waves-cyan">
                            <i class="material-icons">library_books</i>
                            <span class="nav-text">Tugas</span>
                        </a>
                    </li>
                    <li class="bold">
                        <a href="<?= base_url('materi/pertemuan/' . $progress_belajar['id_materi']) ?>" class="waves-effect waves-cyan">
                            <i class="material-icons">library_books</i>
                            <span class="nav-text">Belajar</span>
                        </a>
                    </li>
                <?php endif; ?>


                <?php if ($this->session->userdata['role_id'] == 2) :   ?>

                    <li class="bold">
                        <a href="<?= base_url('tugas') ?>" class="waves-effect waves-cyan">
                            <i class="material-icons">library_books</i>
                            <span class="nav-text">Data Tugas</span>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="bold">
                    <a href="<?= base_url('auth/logout') ?>" class="waves-effect waves-cyan" onclick="return confirm('Yakin ingin keluar ? ');">
                        <i class="material-icons">exit_to_app</i>
                        <span class="nav-text">Keluar</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
        <i class="material-icons">menu</i>
    </a>
</aside>
<!-- END LEFT SIDEBAR NAV-->