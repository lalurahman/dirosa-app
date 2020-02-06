<!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="<?= base_url('assets/admin/') ?>images/avatar/avatar-7.png" alt="" class="circle responsive-img valign profile-image cyan">
                </div>
                <div class="col col s8 m8 l8">

                    <a class="btn-flat waves-effect waves-light white-text profile-btn" href="#">John Doe</a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
        </li>
        <li class="no-padding">
            <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                    <a href="index.html" class="waves-effect waves-cyan">
                        <i class="material-icons">pie_chart_outlined</i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="bold">
                    <a href="<?= base_url() ?>" class="waves-effect waves-cyan">
                        <i class="material-icons">verified_user</i>
                        <span class="nav-text">User Role</span>
                    </a>
                </li>
                <li class="bold">
                    <a href="<?= base_url() ?>" class="waves-effect waves-cyan">
                        <i class="material-icons">person</i>
                        <span class="nav-text">Data Ustadz</span>
                    </a>
                </li>
                <li class="bold">
                    <a href="<?= base_url() ?>" class="waves-effect waves-cyan">
                        <i class="material-icons">person</i>
                        <span class="nav-text">Data Pengguna</span>
                    </a>
                </li>
                <li class="bold">
                    <a href="<?= base_url() ?>" class="waves-effect waves-cyan">
                        <i class="material-icons">library_books</i>
                        <span class="nav-text">Materi</span>
                    </a>
                </li>
                <li class="bold">
                    <a href="<?= base_url() ?>" class="waves-effect waves-cyan">
                        <i class="material-icons">invert_colors</i>
                        <span class="nav-text">Testimoni</span>
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