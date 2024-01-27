<?php
require_once("../config/koneksi.php");

session_start();
$nik = $_SESSION['nik'];

$query = "SELECT * FROM tb_penyakit where nik = '$nik'";
$data = mysqli_query($conn, $query);

while ($d = mysqli_fetch_array($data)) {
    $nik = $d['nik'];
    $hipertensi1 = $d['hipertensi'];
    $ginjal1 = $d['ginjal'];
    $diabetes1 = $d['diabetes'];
    $jantung1 = $d['jantung'];
}

if (isset($_POST['submit'])) {
    $tujuhBelas = $_POST['17'];
    $delapanBelas = $_POST['18'];
    $sembilanBelas = $_POST['19'];
    $duaPuluh = $_POST['20'];
    $duaSatu = $_POST['21'];
    $duaDua = $_POST['22'];
    $duaTiga = $_POST['23'];
    $duaEmpat = $_POST['24'];
    $duaLima = $_POST['25'];
    $duaEnam = $_POST['26'];
    $duaTujuh = $_POST['27'];
    $duaDelapan = $_POST['28'];
    $duaSembilan = $_POST['29'];
    $tigaPuluh = $_POST['30'];
    $tigaSatu = $_POST['31'];

    $hipertensi = 0;
    $ginjal = 0;
    $diabetes = 0;
    $jantung = 0;

    if ($tujuhBelas === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"1";
        $jantung += (int)"1";
    } elseif ($tujuhBelas === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($delapanBelas === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($delapanBelas === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($sembilanBelas === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"0";
        $diabetes += (int)"1";
        $jantung += (int)"0";
    } elseif ($sembilanBelas === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($duaPuluh === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"1";
        $jantung += (int)"0";
    } elseif ($duaPuluh === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($duaSatu === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"1";
        $jantung += (int)"0";
    } elseif ($duaSatu === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($duaDua === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"1";
        $jantung += (int)"0";
    } elseif ($duaDua === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($duaTiga === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"1";
        $jantung += (int)"0";
    } elseif ($duaTiga === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($duaEmpat === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($duaEmpat === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($duaLima === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($duaLima === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($duaEnam === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    } elseif ($duaEnam === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($duaTujuh === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    } elseif ($duaTujuh === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($duaDelapan === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    } elseif ($duaDelapan === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($duaSembilan === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    } elseif ($duaSembilan === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($tigaPuluh === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"1";
        $jantung += (int)"0";
    } elseif ($tigaPuluh === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($tigaSatu === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    } elseif ($tigaSatu === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    $hipertensi += $hipertensi1;
    $ginjal += $ginjal1;
    $diabetes += $diabetes1;
    $jantung += $jantung1;

    $query = "UPDATE tb_penyakit SET hipertensi = '$hipertensi', ginjal = '$ginjal', diabetes = '$diabetes', jantung = '$jantung' WHERE nik='$nik'";

    $sql = mysqli_query($conn, $query);

    echo "<script>
        alert('Berhasil menyimpan data!');
        </script>";

    echo "<meta http-equiv='refresh'
        content='0; url=" . $baseurl . "riwayat_penyakit_keluarga.php'>";
}
mysqli_close($conn);
