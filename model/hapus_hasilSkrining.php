<?php
require_once("../config/koneksi.php");
$nik = $_GET['nik'];
$query = "DELETE FROM tb_hasilskrining WHERE nik = '$nik'";
$queryact = mysqli_query($conn, $query);
echo "<meta http-equiv='refresh'
                content='0; url=$url_view_hasilSkrining'>";
