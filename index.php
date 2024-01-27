<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="row justify-content-center mt-3 mb-2">
            <div class="col-md-6 col-11 bg-white rounded-3 d-flex flex-column align-items-center">
                <section class="d-flex flex-column align-items-center text-center">
                    <img src="asset/img/logo-puskesmas.jpeg" alt="" class="" style="width: 100px;">
                    <p class="fs-6 fw-bold ms-3 mt-2">SKRINING RIWAYAT KESEHATAN <br> PENYAKIT TIDAK MENULAR <br> KELURAHAN BOJONG MENTENG <br> KOTA BEKASI</p>
                </section>
                <div class="card">
                    <div class="card-body">
                        <form action="view/biodata.php" method="get">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Apakah anda merupakan masyarakat yang berdomisili di wilayah kelurahan Bojong Menteng, kota Bekasi?</label><br>
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="domisili" value="Ya" id="firsRadio" required>
                                    <label class="form-check-label" for="firsRadio">Ya </label>
                                </li>
                                <li class="list-group-item aktif mb-2">
                                    <input class="form-check-input me-1" type="radio" name="domisili" value="Tidak" id="secondRadio" required>
                                    <label class="form-check-label" for="secondRadio">Tidak </label>
                                </li>
                                <label for="">Tanggal Lahir</label><br>
                                <input type="date" name="tgl" required>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Selanjutnya</button>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="text-center mt-3 fw-light">Bagi warga di wilayah Bojong Menteng usia >= 15 tahun diharapkan melakukan skrining riwayat kesehatan untuk mengetahui tingkat faktor resiko terhadap penyakit <i>Hipertensi, Ginjal Kronis, Diabetes Melitus dan Jantung Koroner.</i></p>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>