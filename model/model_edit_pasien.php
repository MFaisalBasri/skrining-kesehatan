<?php
require_once("../config/koneksi.php");

if (isset($_POST['simpan'])) {
  $nik = $_POST['nik'];
  $domisili = $_POST["domisili"];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $tgl_lahir = $_POST["tglLahir"];
  $alamat = $_POST["alamat"];
  $rt = $_POST['rt'];
  $rw = $_POST['rw'];
  $no_hp = $_POST['no_hp'];
  $email = $_POST['email'];
  $nama_keluarga = $_POST['nama_keluarga'];
  $alamat_keluarga = $_POST['alamat_keluarga'];
  $nphp_keluarga = $_POST['nohp_keluarga'];
  $email_keluarga = $_POST['email_keluarga'];

  $query = "UPDATE `tb_peserta` SET `nama`='$nama',`tgl_lahir`='$tgl_lahir',`domisili`='$domisili',`alamat`='$alamat',`rt`='$rt',`rw`='$rw',`no_hp`='$no_hp',`email`='$email', `nama_keluarga`='$nama_keluarga', `alamat_keluarga`='$alamat_keluarga', `nohp_keluarga`='$nphp_keluarga', `email_keluarga`='$email_keluarga' WHERE `nik` = '$nik'";

  $sql = mysqli_query($conn, $query);

  echo "<script>
                    alert('Berhasil ubah data!');
                  </script>";

  echo "<meta http-equiv='refresh'
          content='0; url=http:" . $baseurl . "admin/dashboard.php?page=data-pasien'>";
}

mysqli_close($conn);
