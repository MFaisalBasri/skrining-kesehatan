<?php
require_once("../config/koneksi.php");

if (isset($_POST['simpan'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST["tgl"];
    $domisili = $_POST["domisili"];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $tglSkrining = $_POST['tglSkrining'];
    $namaKeluarga = $_POST['namaKeluarga'];
    $alamatKeluarga = $_POST['alamatKeluarga'];
    $telepon = $_POST['telepon'];
    $emailKeluarga = $_POST['emailKeluarga'];
    $sql = mysqli_query($conn, "SELECT * FROM tb_peserta WHERE nik = '$nik'");

    if (mysqli_fetch_array($sql) > 0) {
        session_start();
        $_SESSION['nik'] = $nik;
        $_SESSION['nama'] = $nama;
        echo "<script>
        alert('Anda sudah melakukan skrining!');
        </script>";

        echo "<meta http-equiv='refresh'
        content='0; url=" . $baseurl . "hasil_skrining.php'>";
        return FALSE;
    }

    session_start();
    $_SESSION['nik'] = $nik;
    $_SESSION['nama'] = $nama;
    $_SESSION['tgl_skrining'] = $tglSkrining;

    $query = "INSERT into tb_peserta VALUES ('$nik', '$nama', '$tgl_lahir', '$domisili', '$alamat', '$rt', '$rw', '$no_hp', '$email', '$tglSkrining', '$namaKeluarga', '$alamatKeluarga', '$telepon', '$emailKeluarga')";

    $sql = mysqli_query($conn, $query);

    echo "<script>
                    alert('Selamat berhasil input data!');
                  </script>";

    echo "<meta http-equiv='refresh'
          content='0; url=http:" . $baseurl . "riwayat_kesehatan.php'>";
}

mysqli_close($conn);
