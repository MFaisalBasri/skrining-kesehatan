<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../asset/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../asset/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../asset/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../asset/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../asset/plugins/summernote/summernote-bs4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../asset/img/logo-puskesmas.jpeg" alt="AdminLTELogo" height="60" width="60">
  </div> -->

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->

      <!-- Sidebar -->
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item ms-5 mt-2 mb-2">
              <a href="dashboard.php?page=dashboard" class="nav-link">
                <p><img src="../../asset/img/logo-puskesmas.jpeg" alt="AdminLTE Logo" class="brand-image" style="height: 100px; width: 100px; object-fit: cover;">
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dashboard.php?page=dashboard" class="nav-link <?= $page = $_GET['page'] == 'dashboard' ? 'active' : '';  ?>">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dashboard.php?page=data-pasien" class="nav-link  <?= $page = $_GET['page'] == 'data-pasien' ? 'active' : '';  ?>">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Data Pasien
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dashboard.php?page=data-hasil-skrining" class="nav-link  <?= $page = $_GET['page'] == 'data-hasil-skrining' ? 'active' : '';  ?>">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Hasil Skrining
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dashboard.php?page=data-admin" class="nav-link <?= $page = $_GET['page'] == 'data-admin' ? 'active' : '';  ?>">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Data Admin
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../../model/logout_admin.php" class="nav-link">
                <i class="right fas fa-angle-left"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="content-wrapper">
      <div class="home_content ms-2 mt-1">
        <?php
        if (isset($_GET['page'])) {
          $page = $_GET['page'];

          switch ($page) {
            case 'dashboard':
              include "index_dashboard.php";
              break;
            case 'data-pasien':
              include "../pasien/view_pasien.php";
              break;
            case 'edit-pasien':
              include "../pasien/edit_pasien.php";
              break;
            case 'data-admin':
              include "view_admin.php";
              break;
            case 'tambah-admin':
              include "tambah_admin.php";
              break;
            case 'edit-admin':
              include "edit_admin.php";
              break;
            case 'data-hasil-skrining':
              include "../hasil_skrining/view_hasil_skrining.php";
              break;
            default:
              echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
              break;
          }
        } else {
          include "index_dashboard.php";
        }
        ?>
      </div>
    </div>

    <footer class="main-footer">
      <strong>Copyright &copy; 2024 <a href="https://adminlte.io">UPTD PUSKESMAS</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- jQuery UI 1.11.4 -->
  <script src="../../asset/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../../asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../../asset/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../../asset/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../../asset/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../../asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../../asset/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../../asset/plugins/moment/moment.min.js"></script>
  <script src="../../asset/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../../asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../../asset/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../../asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../asset/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../asset/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../../asset/dist/js/pages/dashboard.js"></script>
</body>

</html>