
<?php
error_reporting(0);
ini_set('display_errors', 0);
include '../config/koneksi.php';
error_reporting(0);
ini_set('display_errors', 0);
if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = mysqli_real_escape_string($conn, $_POST['password']);

  $data_admin = mysqli_query($conn, "SELECT * FROM tb_admin WHERE email = '$email' AND password = '$pass'");

  $a = mysqli_fetch_array($data_admin);

  // admin
  $email_a = $a['email'];
  $password_a = $a['password'];
  $nama_a = $a['nama'];
  $telepon_a = $a['no_hp'];
  $id = $a['id'];

  $cek_admin = mysqli_num_rows($data_admin);

  if ($cek_admin > 0) {
    session_start();
    $_SESSION['email'] = $email_a;
    $_SESSION['pass'] = $password_a;
    $_SESSION['id'] = $id;
    echo "
				<script>
					alert('Selamat Anda berhasil login!');
					document.location.href ='../view/admin/dashboard.php?page=dashboard';
				</script>
				";
  } else {
    echo "
				<script>
					alert('Maaf email dan password tidak valid!');
					document.location.href ='$url_loginAdmin';
				</script>
				";
  }
}

?>
