<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_skrining');

$baseurl = '../view/';
$url = 'http://localhost:8080/skrining/';
$logout = 'http://localhost/skrining/';
$url_view_pasien = $url . 'view/admin/dashboard.php?page=data-pasien';
$url_view_hasilSkrining = $url . 'view/admin/dashboard.php?page=data-hasil-skrining';
$url_view_admin = $url . 'skrining/view/admin/dashboard.php?page=data-admin';
$url_loginAdmin = $url . 'skrining/view/admin/';
