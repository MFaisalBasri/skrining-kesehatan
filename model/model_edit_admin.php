<?php
require_once("../config/koneksi.php");

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $password = $_POST['pw'];

    $query = "UPDATE `tb_admin` SET `nama`= '$nama',`no_hp`=' $no_hp',`email`= '$email',`password` = '$password' WHERE id = '$id'";

    $sql = mysqli_query($conn, $query);

    echo "<script>
        alert('Berhasil ubah data Admin!');
      </script>";

    echo "<meta http-equiv='refresh'
        content='0; url=http:" . $baseurl . "admin/dashboard.php?page=data-admin'>";
}

mysqli_close($conn);
