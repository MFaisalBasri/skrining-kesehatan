<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skrining</title>
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
                <form class="mb" action="../model/model_riwayat_penyakit_keluarga.php" method="post">
                    <h3 class="text-center mt-3 mb-3">Riwayat Penyakit Keluarga</h3>

                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="firstRadio32">32. Hipertensi</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="32" value="Ya" id="firstRadio32" required>
                            <label class="form-check-label" for="firstRadio32">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="32" value="Tidak" id="secondRadio32" required required>
                            <label class="form-check-label" for="secondRadio32">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="33">33. Diabetes Mellitus</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="33" value="Ya" id="firstRadio33" required>
                            <label class="form-check-label" for="firstRadio33">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="33" value="Tidak" id="secondRadio33" required>
                            <label class="form-check-label" for="secondRadio33">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="34">34. Jantung Koroner</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="34" value="Ya" id="firstRadio34" required>
                            <label class="form-check-label" for="firstRadio34">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="34" value="Tidak" id="secondRadio34" required>
                            <label class="form-check-label" for="secondRadio34">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="35">35. Ginjal</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="35" value="Ya" id="firstRadio35" required>
                            <label class="form-check-label" for="firstRadio35">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="35" value="Tidak" id="secondRadio35" required>
                            <label class="form-check-label" for="secondRadio35">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="36">36. Gangguan Kejiwaan / Depresi</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="36" value="Ya" id="firstRadio36" required>
                            <label class="form-check-label" for="firstRadio36">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="36" value="Tidak" id="secondRadio36" required>
                            <label class="form-check-label" for="secondRadio36">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="37">37. Serangan Jantung usia muda</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="37" value="Ya" id="firstRadio37" required>
                            <label class="form-check-label" for="firstRadio37">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="37" value="Tidak" id="secondRadio37" required>
                            <label class="form-check-label" for="secondRadio37">Tidak </label>
                        </li>
                    </ul>
                    <h3 class="text-center mt-5 mb-3">Pola Konsumsi Makanan</h3>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="38">38. Makanan Bersantan</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="38" value="Ya" id="firstRadio38" required>
                            <label class="form-check-label" for="firstRadio38">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="38" value="Tidak" id="secondRadio38" required>
                            <label class="form-check-label" for="secondRadio38">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="39">39. Makanan Cepat Saji</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="39" value="Ya" id="firstRadio39" required>
                            <label class="form-check-label" for="firstRadio39">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="39" value="Tidak" id="secondRadio39" required>
                            <label class="form-check-label" for="secondRadio39">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="40">40. Jeroan, Otak, dll</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="40" value="Ya" id="firstRadio40" required>
                            <label class="form-check-label" for="firstRadio40">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="40" value="Tidak" id="secondRadio40" required>
                            <label class="form-check-label" for="secondRadio40">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="41">41. Sup buntut, daging, jerohan dll</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="41" value="Ya" id="firstRadio41" required>
                            <label class="form-check-label" for="firstRadio41">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="41" value="Tidak" id="secondRadio41" required>
                            <label class="form-check-label" for="secondRadio41">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="42">42. Pecel, urap</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="42" value="Ya" id="firstRadio42" required>
                            <label class="form-check-label" for="firstRadio42">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="42" value="Tidak" id="secondRadio42" required>
                            <label class="form-check-label" for="secondRadio42">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="43">43. Tahu, Tempe</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="43" value="Ya" id="firstRadio43" required>
                            <label class="form-check-label" for="firstRadio43">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="43" value="Tidak" id="secondRadio43" required>
                            <label class="form-check-label" for="secondRadio43">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="44">44. Minuman Bersoda</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="44" value="Ya" id="firstRadio44" required>
                            <label class="form-check-label" for="firstRadio44">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="44" value="Tidak" id="secondRadio44" required>
                            <label class="form-check-label" for="secondRadio44">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="45">45. Teh manis > 3 gelas/hari</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="45" value="Ya" id="firstRadio45" required>
                            <label class="form-check-label" for="firstRadio45">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="45" value="Tidak" id="secondRadio45" required>
                            <label class="form-check-label" for="secondRadio45">Tidak </label>
                        </li>
                    </ul>

                    <!-- <input type="submit" name="submit" value="submit" class="bg-primary text-white rounded-5"> -->
                    <a href="hasil_skrining.php">
                        <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
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
    <script>
        const menuToggle = document.querySelector('.menu-togle input');
        const li = document.querySelector('.aktif');

        menuToggle.addEventListener('click', function() {
            li.classList.toggle('hijau');
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>