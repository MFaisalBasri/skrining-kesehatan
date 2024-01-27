<?php
require_once("../config/koneksi.php");
if (!isset($_SESSION['email'])) {
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['nama']);
    unset($_SESSION['pass']);
}

// session_destroy();
header('location:../view/admin/' );
