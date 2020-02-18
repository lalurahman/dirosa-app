 <!-- START HEADER -->
 <header id="header" class="page-topbar">
     <!-- start header nav-->
     <div class="navbar-fixed">
         <nav class="navbar-color gradient-45deg-light-blue-cyan">
             <div class="nav-wrapper">
                 <ul class="left">
                     <li>
                         <h1 class="logo-wrapper">
                             <a href="#" class="brand-logo darken-1">
                                 <span class="logo-text hide-on-med-and-down">DirosApp</span>
                             </a>
                         </h1>
                     </li>
                 </ul>

                 <ul class="right hide-on-med-and-down">

                     <li style="margin-right: 20px;">
                         <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                             <span class="avatar-status avatar-online">
                                 <img src="<?= base_url('assets/img/users/').$user['foto'] ?>" alt="avatar">
                                 <i></i>
                             </span>
                         </a>
                     </li>

                 </ul>
                 <!-- translation-button -->

                 <!-- notifications-dropdown -->
                
                 <!-- profile-dropdown -->
                 <ul id="profile-dropdown" class="dropdown-content">
                     <li>
                         <a href="<?= base_url('user/profile') ?>" class="grey-text text-darken-1">
                             <i class="material-icons">face</i> Profile</a>
                     </li>

                     <li>
                         <a href="<?= base_url('auth/logout') ?>" class="grey-text text-darken-1"  onclick="return confirm('Yakin ingin keluar ? ');">
                             <i class="material-icons">keyboard_tab</i> Logout</a>
                     </li>
                 </ul>
             </div>
         </nav>
     </div>
     <!-- end header nav-->
 </header>

 <!-- END HEADER -->