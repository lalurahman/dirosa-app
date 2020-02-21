<section id="content">
    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->

        <div class="container">
            <div class="row">
                <div class="col s10 m6 l6">
                    <h5 class="breadcrumbs-title"></h5>
                    <ol class="breadcrumbs pt-4">
                        <h5>Detail Pengguna</h5>
                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn waves-effect waves-light breadcrumbs-btn right" href="<?= base_url('admin/dataadmin') ?>">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
    <!--start container-->
    <div class="container">
      <div class="row">
        <div class="col s12 m8">
          <table class="white  striped highlight">
                <tr class="white">
                  <td colspan="2"><img src="<?= base_url('assets/img/users/').$user['foto'] ?>" class="responsive-img center-block materialboxed z-depth-2" style="height: 80px"></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td><?= $user['nama'] ?></td>
                </tr>
                  <td>Email</td>
                  <td><?= $user['email'] ?></td>
                </tr>
                <tr>
                  <td>Terdaftar Sejak</td>
                  <td><?= date("d-m-Y", strtotime($user['date_created'])) ?></td>
                </tr>
            </table>
        </div>
      </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('.datePicker').datePicker();
    });
</script>