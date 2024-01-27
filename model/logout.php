<?php
require_once("../config/koneksi.php");
if (!isset($_SESSION['nik'])) {
    session_start();
    unset($_SESSION['nik']);
    unset($_SESSION['nama']);
}

// session_destroy();
header('location:' . $logout);
