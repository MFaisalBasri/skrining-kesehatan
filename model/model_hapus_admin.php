<?php
require_once("../config/koneksi.php");
$id = $_GET['id'];
$query = "DELETE FROM tb_admin WHERE id = '$id'";
$queryact = mysqli_query($conn, $query);
echo "<meta http-equiv='refresh'
                content='0; url=$url_view_admin'>";
