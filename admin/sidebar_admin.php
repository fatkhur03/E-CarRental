<?php
session_start();
if (empty($_SESSION['username'])) { ?>
<script type="text/javascript">
  alert('Anda belum melakukan login.');
  window.location.assign('index.html');
</script>
<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | E-CarRental</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../plugins/fullcalendar/main.css">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
  <link rel="icon" href="https://i.postimg.cc/Qx21sctS/E-Car-Rental-1.png">

  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="https://i.postimg.cc/Qx21sctS/E-Car-Rental-1.png" alt="AdminLTELogo" height="70" width="70">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        <li class="nav-item d-none d-sm-inline-block" style="margin-top:7px">
          <b><span class="" id="infoText"></span></b>
          <script>
            var typed = new Typed('#infoText', {
              strings: ["Assalamualaikum Warahmatullah Wabarakatuh", "Selamat Datang...", "Di Aplikasi E-CarRental"],
              typeSpeed: 50,
              backDelay: 1000,
              // startDelay: 500,
              backSpeed: 50,
              loop: true,
            });
          </script>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>


        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>


        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span
              class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo "<b>".$_SESSION['username']."</b>";?></span>
            <img class="img-profile rounded-circle" src="https://i.postimg.cc/0yFsmB2m/undraw-profile.png" width="30px">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

            <a class="dropdown-item" href="?url=profile">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>

            <div class="dropdown-divider"></div>

            <a class="nav-link" onclick="return confirm('Yakin Ni Mau Keluar ?')" href="../index.html">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="?url=dashboard" class="brand-link">

        <h2 align="center"><b>E-</b>CarRental</h2>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="https://i.postimg.cc/0yFsmB2m/undraw-profile.png"
              class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="?url=dashboard" class="d-block"><?php echo "<b>".$_SESSION['username']."</b>";?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item ">
              <a href="?url=dashboard" class="nav-link active">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-right"></i>
                </p>
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a href="?url=daftar_booking" class="nav-link">
                <i class="nav-icon fas fa-fw fa-columns"></i>
                <p>
                  Booking
                  <i class="right fas fa-angle-right"></i>
                </p>
              </a>
            </li>
        

            <li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-car"></i>
<p>
Kendaraan
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="?url=daftar_kendaraan" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Daftar kendaraan</p>
</a>
</li>
<li class="nav-item">
<a href="?url=tambah_kendaraan" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Tambah Kendaraan</p>
</a>
</li>
</ul>

            <li class="nav-item">
              <a href="?url=daftar_peminjam" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Peminjam
                  <i class="right fas fa-angle-right"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?url=daftar_transaksi" class="nav-link">
                <i class="nav-icon fas fa-handshake"></i>
                <p>
                  Transaksi
                  <i class="right fas fa-angle-right"></i>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="?url=jadwal" class="nav-link">
                <i class="nav-icon fas fa-list"></i>
                <p>
                  Jadwal
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a href="?url=manajemen_akun" class="nav-link">
                <i class="nav-icon fas fa-fw fa-cog"></i>
                <p>
                  Manajemen Akun
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <?php
             if(!empty(@$_GET['url'])){
              switch (@$_GET['url']) {

                case 'dashboard';
                include'dashboard.html';
                break;

                case 'daftar_booking';
                include'daftar_booking.html';
                break;

                case 'daftar_kendaraan';
                include'daftar_kendaraan.html';
                break;

                case 'daftar_peminjam';
                include'daftar_peminjam.html';
                break;

                case 'detail_kendaraan';
                include'detail_kendaraan.html';
                break;

                case 'daftar_transaksi';
                include'daftar_transaksi.html';
                break;

                case 'tambah_kendaraan';
                include'tambah_kendaraan.html';
                break;

                case 'tambah_peminjam';
                include'tambah_peminjam.html';
                break;  

                case 'manajemen_akun';
                include'manajemen_akun.html';
                break;

                case 'edit_kendaraan';
                include'edit_kendaraan.html';
                break;

                case 'detail_akun';
                include'detail_akun.html';
                break;

                case 'profile';
                include'profile.html';
                break;

                case 'jadwal';
                include'jadwal.html';
                break;

                case 'detail_transaksi/detail1';
                include'detail_transaksi/detail1.html';
                break;

                case 'detail_transaksi/detail2';
                include'detail_transaksi/detail2.html';
                break;

                case 'detail_transaksi/detail3';
                include'detail_transaksi/detail3.html';
                break;

                default:
                echo "<h3>Halaman tidak ditemukan Thur, <br>coba cari dimana letak kesalahannya - TELITI LAGI</h3>";
                break;
              }
            }
            ?>



      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->

          <!-- /.row -->

          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023<a href="?url=dashboard"> E-CarRental</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Develop by</b> Students STT Terpadu Nurul Fikri
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../plugins/moment/moment.min.js"></script>
  <script src="../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/pages/dashboard.js"></script>
  <!-- fullCalendar 2.2.5 -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/fullcalendar/main.js"></script>




</body>

</html>