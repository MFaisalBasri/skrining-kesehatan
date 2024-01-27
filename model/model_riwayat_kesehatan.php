<?php
require_once("../config/koneksi.php");

if (isset($_POST['submit'])) {
    $noSatu = $_POST['1'];
    $noDua = $_POST['2'];
    $noTiga = $_POST['3'];
    $noEmpat = $_POST['4'];
    $noLima = $_POST['5'];
    $noEnam = $_POST['6'];
    $noTujuh = $_POST['7'];
    $noDelapan = $_POST['8'];
    $noSembilan = $_POST['9'];
    $noSepuluh = $_POST['10'];
    $noSebelas = $_POST['11'];
    $noDuabelas = $_POST['12'];
    $noTigabelas = $_POST['13'];
    $noEmpatbelas = $_POST['14'];
    $noLimabelas = $_POST['15'];
    $noEnambelas = $_POST['16'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];

    $hipertensi = 0;
    $ginjal = 0;
    $diabetes = 0;
    $jantung = 0;

    if ($noSatu === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"1";
        $jantung += (int)"1";
    } elseif ($noSatu === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($noDua === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"1";
        $diabetes += (int)"1";
        $jantung += (int)"0";
    } elseif ($noDua === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($noTiga === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"1";
        $jantung += (int)"0";
    } elseif ($noTiga === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($noEmpat === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"1";
        $diabetes += (int)"1";
        $jantung += (int)"1";
    } elseif ($noEmpat === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($noLima === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"1";
        $jantung += (int)"0";
    } elseif ($noLima === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($noEnam === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"1";
        $jantung += (int)"0";
    } elseif ($noEnam === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($noTujuh === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"1";
        $diabetes += (int)"1";
        $jantung += (int)"0";
    } elseif ($noTujuh === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($noDelapan === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($noDelapan === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($noSembilan === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($noSembilan === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($noSepuluh === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"1";
        $jantung += (int)"1";
    } elseif ($noSepuluh === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($noSebelas === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($noSebelas === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($noDuabelas === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"0";
        $diabetes += (int)"1";
        $jantung += (int)"1";
    } elseif ($noDuabelas === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($noTigabelas === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    } elseif ($noTigabelas === "Tidak") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"1";
        $jantung += (int)"1";
    }

    if ($noEmpatbelas === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($noEmpatbelas === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($noLimabelas === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($noLimabelas === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($noEnambelas === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($noEnambelas === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    $query = "INSERT into tb_penyakit VALUES ('$nik', '$nama', '$hipertensi', '$ginjal', '$diabetes', '$jantung')";

    $sql = mysqli_query($conn, $query);

    echo "<script>
        alert('Berhasil menyimpan data!');
        </script>";

    echo "<meta http-equiv='refresh'
        content='0; url=" . $baseurl . "riwayat_penyakit_pribadi.php'>";
}
mysqli_close($conn);
