<?php
session_start();
if (empty($_SESSION['email']) && empty($_SESSION['pass'])) {
    header('location:login.php');
} else {
    error_reporting(E_ALL | E_STRICT);
    include_once("../../config/koneksi.php");
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../../asset/css/styleDashboard.css" />
    </head>

    <body style="background-color: #c1c1c1;">

        <div class="sidebar">
            <div class="logo_content" style="height:100px">
                <div class="logo">
                    <a href="">
                    <img src="../../asset/img/logo-puskesmas.jpeg" alt="" class="mb-3" style="width: 100px; height: 100px; margin-left:20px; margin-top:20px;">
                    </a>
                </div>
                <i class="bi bi-list" id="btn"></i>
            </div>
            <ul class="nav mt-5">
                <li>
                    <a href="dashboard.php?page=dashboard">
                        <i class="bi bi-grid-1x2"></i>
                        <span class="link_name">Dashboard</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>

                <li>
                    <a href="dashboard.php?page=data-pasien">
                        <i class="bi bi-people"></i>
                        <span class="link_name">Data Pasien</span>
                    </a>
                    <span class="tooltip">Data Pasien</span>
                </li>
                <li>
                    <a href="dashboard.php?page=data-hasil-skrining">
                        <i class="bi bi-clipboard2-data"></i>
                        <span class="link_name">Hasil Skrining</span>
                    </a>
                    <span class="tooltip">Hasil Skrining</span>
                </li>
                <li>
                    <a href="dashboard.php?page=data-admin">
                        <i class="bi bi-person"></i>
                        <span class="link_name">Data Admin</span>
                    </a>
                    <span class="tooltip">Data Admin</span>
                </li>
                <li>
                    <a href="../../model/logout_admin.php">
                        <i class="bi bi-box-arrow-left"></i>
                        <span class="link_name">Logout</span>
                    </a>
                    <span class="tooltip">Logout</span>
                </li>
            </ul>
        </div>

        <div class="home_content">
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

        <script>
            let btn = document.querySelector("#btn");
            let sidebar = document.querySelector(".sidebar");
            let scrBtn = document.querySelector(".bx-search");
            let src = document.querySelector(".src");

            btn.onclick = function() {
                sidebar.classList.toggle("active");
            };
            scrBtn.onclick = function() {
                src.classList.toggle("active");
            };
            scrBtn.onclick = function() {
                sidebar.classList.toggle("active");
            };
        </script>
    </body>

    </html>
<?php } ?>