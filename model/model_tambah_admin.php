<?php
require_once("../config/koneksi.php");

if (isset($_POST['simpan'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $no_hp = $_POST['no_hp'];
  $email = $_POST['email'];
  $password = $_POST['pw'];

  $query = "SELECT * FROM tb_admin WHERE nama = '$nama'";

  $sql = mysqli_query($conn, $query);

  if (mysqli_fetch_array($sql) > 0) {
    echo "<script>
                   alert('Maaf akun sudah terdaftar!');
                 </script>";

    echo "<meta http-equiv='refresh'
                 content='0; url=$url_view_admin'>";

    return FALSE;
  }

  $query = "INSERT into tb_admin VALUES ('$id', '$nama', '$no_hp', '$email', '$password')";
  $sql = mysqli_query($conn, $query);
  var_dump($sql);

  echo "<script>
                    alert('Berhasil input Admin!');
                  </script>";

  echo "<meta http-equiv='refresh'
          content='0; url=" . $baseurl . "admin/dashboard.php?page=data-admin'>";
}

mysqli_close($conn);
