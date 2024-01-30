<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_skrining');

$baseurl = '../view/';
$url = 'http://localhost/skrining/skrining-kesehatan/';
$logout = 'http://localhost/skrining/skrining-kesehatan/';
$url_view_pasien = $url . 'view/admin/dashboard.php?page=data-pasien';
$url_view_hasilSkrining = $url . 'view/admin/dashboard.php?page=data-hasil-skrining';
$url_view_admin = $url . 'view/admin/dashboard.php?page=data-admin';
$url_loginAdmin = $url . 'view/admin/';
