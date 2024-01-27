<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riwayat Penyakit</title>
    <style>
        /* input[type=radio]:checked+label {
            background-color: green;
            color: white;
        } */
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div class="container">
        <div class="row justify-content-center mt-3 mb-2">
            <div class="col-md-12 col-11 p-md-5 bg-light rounded-3">
                <form class="mb" action="../model/model_riwayat_penyakit_pribadi.php" method="post">
                    <h3 class="text-center mt-3 mb-3">Riwayat Penyakit Pribadi</h3>

                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="Pertanyaan">17. Diabetes Mellitus</label>
                        </li>
                        <div class="row justify-content-start">
                            <div class="">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="17" value="Ya" id="firstRadio1" required>
                                    <label class="form-check-label" for="firstRadio1">Ya</label>
                                </li>
                            </div>
                            <div class="">
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="17" value="Tidak" id="secondRadio1" required>
                                    <label class="form-check-label" for="secondRadio1">Tidak</label>
                                </li>
                            </div>
                        </div>
                    </ul>

                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="Pertanyaan">18. Stroke</label>
                        </li>
                        <div class="row justify-content-start">
                            <div class="">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="18" value="Ya" id="firstRadio2" required>
                                    <label class="form-check-label" for="firstRadio2">Ya</label>
                                </li>
                            </div>
                            <div class="">
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="18" value="Tidak" id="secondRadio2" required>
                                    <label class="form-check-label" for="secondRadio2">Tidak</label>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="Pertanyaan">19. Penyakit Pembuluh Darah Tepi</label>
                        </li>
                        <div class="row justify-content-start">
                            <div class="">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="19" value="Ya" id="firstRadio19" required>
                                    <label class="form-check-label" for="firstRadio19">Ya</label>
                                </li>
                            </div>
                            <div class="">
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="19" value="Tidak" id="secondRadio19" required>
                                    <label class="form-check-label" for="secondRadio19">Tidak</label>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="Pertanyaan">20. Katarak</label>
                        </li>
                        <div class="row justify-content-start">
                            <div class="">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="20" value="Ya" id="firstRadio20" required>
                                    <label class="form-check-label" for="firstRadio20">Ya</label>
                                </li>
                            </div>
                            <div class="">
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="20" value="Tidak" id="secondRadio20" required>
                                    <label class="form-check-label" for="secondRadio20">Tidak</label>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="Pertanyaan">21. Penyakit Retina/Mata</label>
                        </li>
                        <div class="row justify-content-start">
                            <div class="">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="21" value="Ya" id="firstRadio21" required>
                                    <label class="form-check-label" for="firstRadio21">Ya</label>
                                </li>
                            </div>
                            <div class="">
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="21" value="Tidak" id="secondRadio21" required>
                                    <label class="form-check-label" for="secondRadio21">Tidak</label>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="Pertanyaan">22. Glukoma</label>
                        </li>
                        <div class="row justify-content-start">
                            <div class="">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="22" value="Ya" id="firstRadio22" required>
                                    <label class="form-check-label" for="firstRadio22">Ya</label>
                                </li>
                            </div>
                            <div class="">
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="22" value="Tidak" id="secondRadio22" required>
                                    <label class="form-check-label" for="secondRadio22">Tidak</label>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="Pertanyaan">23. Hipertensi / Tekanan Darah Tinggi</label>
                        </li>
                        <div class="row justify-content-start">
                            <div class="">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="23" value="Ya" id="firstRadio23" required>
                                    <label class="form-check-label" for="firstRadio23">Ya</label>
                                </li>
                            </div>
                            <div class="">
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="23" value="Tidak" id="secondRadio23" required>
                                    <label class="form-check-label" for="secondRadio23">Tidak</label>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="Pertanyaan">24. Jantung Koroner</label>
                        </li>
                        <div class="row justify-content-start">
                            <div class="">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="24" value="Ya" id="firstRadio24" required>
                                    <label class="form-check-label" for="firstRadio24">Ya</label>
                                </li>
                            </div>
                            <div class="">
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="24" value="Tidak" id="secondRadio24" required>
                                    <label class="form-check-label" for="secondRadio24">Tidak</label>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="Pertanyaan">25. Kolesterol Tinggi</label>
                        </li>
                        <div class="row justify-content-start">
                            <div class="">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="25" value="Ya" id="firstRadio25" required>
                                    <label class="form-check-label" for="firstRadio25">Ya</label>
                                </li>
                            </div>
                            <div class="">
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="25" value="Tidak" id="secondRadio25" required>
                                    <label class="form-check-label" for="secondRadio25">Tidak</label>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="Pertanyaan">26. Asam Urat Tinggi</label>
                        </li>
                        <div class="row justify-content-start">
                            <div class="">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="26" value="Ya" id="firstRadio26" required>
                                    <label class="form-check-label" for="firstRadio26">Ya</label>
                                </li>
                            </div>
                            <div class="">
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="26" value="Tidak" id="secondRadio26" required>
                                    <label class="form-check-label" for="secondRadio26">Tidak</label>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="Pertanyaan">27. Penyakit Hati / Liver</label>
                        </li>
                        <div class="row justify-content-start">
                            <div class="">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="27" value="Ya" id="firstRadio27" required>
                                    <label class="form-check-label" for="firstRadio27">Ya</label>
                                </li>
                            </div>
                            <div class="">
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="27" value="Tidak" id="secondRadio27" required>
                                    <label class="form-check-label" for="secondRadio27">Tidak</label>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="Pertanyaan">28. Penyakit Hati / Liver</label>
                        </li>
                        <div class="row justify-content-start">
                            <div class="">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="28" value="Ya" id="firstRadio28" required>
                                    <label class="form-check-label" for="firstRadio28">Ya</label>
                                </li>
                            </div>
                            <div class="">
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="28" value="Tidak" id="secondRadio28" required>
                                    <label class="form-check-label" for="secondRadio28">Tidak</label>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="Pertanyaan">29. Pernah Operasi Pankreas</label>
                        </li>
                        <div class="row justify-content-start">
                            <div class="">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="29" value="Ya" id="firstRadio29" required>
                                    <label class="form-check-label" for="firstRadio29">Ya</label>
                                </li>
                            </div>
                            <div class="">
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="29" value="Tidak" id="secondRadio29" required>
                                    <label class="form-check-label" for="secondRadio29">Tidak</label>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="Pertanyaan">30. Kista pada Indung Telur</label>
                        </li>
                        <div class="row justify-content-start">
                            <div class="">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="30" value="Ya" id="firstRadio30" required>
                                    <label class="form-check-label" for="firstRadio30">Ya</label>
                                </li>
                            </div>
                            <div class="">
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="30" value="Tidak" id="secondRadio30" required>
                                    <label class="form-check-label" for="secondRadio30">Tidak</label>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2 mb-3">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="Pertanyaan">31. Melahirkan bayi besar >= 4 kg</label>
                        </li>
                        <div class="row justify-content-start">
                            <div class="">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="radio" name="31" value="Ya" id="firstRadio31" required>
                                    <label class="form-check-label" for="firstRadio31">Ya</label>
                                </li>
                            </div>
                            <div class="">
                                <li class="list-group-item aktif">
                                    <input class="form-check-input me-1" type="radio" name="31" value="Tidak" id="secondRadio31" required>
                                    <label class="form-check-label" for="secondRadio31">Tidak</label>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <!-- <input type="submit" name="submit" value="submit" class="bg-primary text-white rounded-5"> -->
                    <a href="riwayat_penyakit_keluarga.php">
                        <button class="btn btn-primary" type="submit" name="submit">Selanjutnya</button>
                    </a>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <nav class="navbar bg-body-tertiary  justify-content-evenly">
            <div class="d-grid gap-2  d-flex">
                <span>UPTD Bojong Menteng Kota Bekasi 2023</span>
            </div>
        </nav>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>