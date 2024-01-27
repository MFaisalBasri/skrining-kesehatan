<?php
require_once("../config/koneksi.php");
session_start();
$nik = $_SESSION['nik'];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Skrining</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-3 mb-2">
            <div class="col-md-12 col-11 bg-light rounded-3">
                <form class="" action="#" method="post">
                    <div class="container mt-2 d-flex align-items-center flex-column bg-light">
                        <div class="card mt-3" style="border-left: 5px solid green;">
                            <div class="card-body">
                                <h4 class="card-title">Hasil Skrining</h4>
                                <?php
                                $query = "SELECT tb_peserta.nama, tb_peserta.nik, tb_peserta.alamat, tb_peserta.tgl_skrining, tb_penyakit.hipertensi, tb_penyakit.diabetes, tb_penyakit.ginjal, tb_penyakit.jantung  from tb_peserta INNER JOIN tb_penyakit ON tb_peserta.nik = tb_penyakit.nik WHERE tb_peserta.nik = '$nik'";
                                $data = mysqli_query($conn, $query);
                                while ($d = mysqli_fetch_array($data)) {
                                    if ($d['hipertensi'] < 10) {
                                        $resikoHipertensi = "Resiko Rendah";
                                    } elseif ($d['hipertensi'] > 11 && $d['hipertensi'] <= 19) {
                                        $resikoHipertensi = "Resiko Sedang";
                                    } else {
                                        $resikoHipertensi = "Resiko Tinggi";
                                    }

                                    if ($d['diabetes'] < 7) {
                                        $resikoDiabetes = "Resiko Rendah";
                                    } elseif ($d['diabetes'] > 8 && $d['diabetes'] <= 14) {
                                        $resikoDiabetes = "Resiko Sedang";
                                    } else {
                                        $resikoDiabetes = "Resiko Tinggi";
                                    }

                                    if ($d['ginjal'] < 10) {
                                        $resikoGinjal = "Resiko Rendah";
                                    } elseif ($d['ginjal'] > 11 && $d['ginjal'] <= 19) {
                                        $resikoGinjal = "Resiko Sedang";
                                    } else {
                                        $resikoGinjal = "Resiko Tinggi";
                                    }

                                    if ($d['jantung'] < 9) {
                                        $resikoJantung = "Resiko Rendah";
                                    } elseif ($d['jantung'] > 10 && $d['jantung'] <= 18) {
                                        $resikoJantung = "Resiko Sedang";
                                    } else {
                                        $resikoJantung = "Resiko Tinggi";
                                    }




                                ?>
                                    <p class="card-text fs-5"><?= "Hipertensi: " . $resikoHipertensi . ",  " . "Diabetes: " . $resikoHipertensi . ", "; ?> </p>
                                    <p class="card-text fs-5"><?= "Ginjal: " . $resikoHipertensi  . ", " . "Jantung: " . $resikoHipertensi; ?></p>
                                    <p class="fw-light fs-6 text-muted">Jaga pola hidup sehat, lakukan latihan fisik rutin minimal 30 menit/hari.</p>
                            </div>
                        </div>

                        <div class="card mt-3 mb-5">
                            <div class="card-header">
                                Info Skrining
                            </div>

                            <ul class="list-group list-group-flush">
                                <?php
                                    // while ($d = mysqli_fetch_array($data)) {
                                ?>
                                <li class="list-group-item"><?= $d['nik']; ?></li>
                                <li class="list-group-item"><?= $d['nama']; ?></li>
                                <li class="list-group-item"><?= $d['alamat']; ?></li>
                                <li class="list-group-item"><?= $d['tgl_skrining']; ?></li>
                                <li class="list-group-item fst-italic text-danger fs-6">Skrining dilakukan 1x(kali) dalam satu tahun, silahkan lakukan Skrining lagi tahun depan!</li>
                                <li class="list-group-item">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-between">
                                        <a href="../model/logout.php">
                                            <button class="btn btn-danger me-md-2" type="button">Halaman Utama</button>
                                        </a>
                                    </div>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>