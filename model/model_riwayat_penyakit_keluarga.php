<?php
require_once("../config/koneksi.php");

session_start();
$nik = $_SESSION['nik'];
$nama = $_SESSION['nama'];
$tgl_skrining = $_SESSION['tgl_skrining'];
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
    $tigaDua = $_POST['32'];
    $tigaTiga = $_POST['33'];
    $tigaEmpat = $_POST['34'];
    $tigaLima = $_POST['35'];
    $tigaEnam = $_POST['36'];
    $tigaTujuh = $_POST['37'];
    $tigaDelapan = $_POST['38'];
    $tigaSembilan = $_POST['39'];
    $empatPuluh = $_POST['40'];
    $empatSatu = $_POST['41'];
    $empatDua = $_POST['42'];
    $empatTiga = $_POST['43'];
    $empatEmpat = $_POST['44'];
    $empatLima = $_POST['45'];

    $hipertensi = 0;
    $ginjal = 0;
    $diabetes = 0;
    $jantung = 0;

    if ($tigaDua === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($tigaDua === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($tigaTiga === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($tigaTiga === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($tigaEmpat === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"1";
        $jantung += (int)"1";
    } elseif ($tigaEmpat === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($tigaLima === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($tigaLima === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($tigaEnam === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    } elseif ($tigaEnam === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($tigaTujuh === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"0";
        $diabetes += (int)"1";
        $jantung += (int)"0";
    } elseif ($tigaTujuh === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($tigaDelapan === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($tigaDelapan === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($tigaSembilan === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($tigaSembilan === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($empatPuluh === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"1";
        $jantung += (int)"1";
    } elseif ($empatPuluh === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($empatSatu === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($empatSatu === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($empatDua === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($empatDua === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($empatTiga === "Ya") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($empatTiga === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($empatEmpat === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"1";
        $diabetes += (int)"0";
        $jantung += (int)"1";
    } elseif ($empatEmpat === "Tidak") {
        $hipertensi += (int)"0";
        $ginjal += (int)"0";
        $diabetes += (int)"0";
        $jantung += (int)"0";
    }

    if ($empatLima === "Ya") {
        $hipertensi += (int)"0";
        $ginjal += (int)"1";
        $diabetes += (int)"1";
        $jantung += (int)"1";
    } elseif ($empatLima === "Tidak") {
        $hipertensi += (int)"1";
        $ginjal += (int)"1";
        $diabetes += (int)"1";
        $jantung += (int)"1";
    }

    $hipertensi += $hipertensi1;
    $ginjal += $ginjal1;
    $diabetes += $diabetes1;
    $jantung += $jantung1;

    $query = "UPDATE tb_penyakit SET hipertensi = '$hipertensi', ginjal = '$ginjal', diabetes = '$diabetes', jantung = '$jantung' WHERE nik='$nik'";
    $sqlUpdate = mysqli_query($conn, $query);

    if ($sqlUpdate) {
        if ($hipertensi < 10) {
            $resikoHipertensi = "Resiko Rendah";
        } elseif ($hipertensi > 11 && $hipertensi <= 19) {
            $resikoHipertensi = "Resiko Sedang";
        } else {
            $resikoHipertensi = "Resiko Tinggi";
        }

        if ($diabetes < 7) {
            $resikoDiabetes = "Resiko Rendah";
        } elseif ($diabetes > 8 && $diabetes <= 14) {
            $resikoDiabetes = "Resiko Sedang";
        } else {
            $resikoDiabetes = "Resiko Tinggi";
        }

        if ($ginjal < 10) {
            $resikoGinjal = "Resiko Rendah";
        } elseif ($ginjal > 11 && $ginjal <= 19) {
            $resikoGinjal = "Resiko Sedang";
        } else {
            $resikoGinjal = "Resiko Tinggi";
        }

        if ($jantung < 9) {
            $resikoJantung = "Resiko Rendah";
        } elseif ($jantung > 10 && $jantung <= 18) {
            $resikoJantung = "Resiko Sedang";
        } else {
            $resikoJantung = "Resiko Tinggi";
        }
        $queryInsert = "INSERT INTO tb_hasilskrining VALUES ('$nik', '$nama', '$tgl_skrining', '$resikoHipertensi', '$resikoDiabetes', '$resikoGinjal', '$resikoJantung')";
        $sqlInsert = mysqli_query($conn, $queryInsert);

        // Cek apakah INSERT berhasil
        if ($sqlInsert) {
            echo "<script>
                alert('Berhasil menyimpan data!');
            </script>";

            echo "<meta http-equiv='refresh' content='0; url=" . $baseurl . "hasil_skrining.php'>";
        } else {
            echo "<script>
                alert('Gagal menyimpan data baru!');
            </script>";
        }
    } else {
        echo "<script>
            alert('Gagal menyimpan data!');
        </script>";
    }
}
mysqli_close($conn);
