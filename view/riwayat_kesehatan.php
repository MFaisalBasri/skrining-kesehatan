<?php
session_start();
$_SESSION['nik'];
$_SESSION['nama'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riwayat Kesehatan</title>
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
                <form class="mb" action="../model/model_riwayat_kesehatan.php" method="post">
                    <h3 class="text-center mb-3 mt-3">Riwayat Kesehatan</h3>
                    <input type="hidden" name="nik" value="<?= $_SESSION['nik']; ?>">
                    <input type="hidden" name="nama" value="<?= $_SESSION['nama']; ?>">
                    <input type="hidden" name="tgl_skrining" value="<?= $_SESSION['tgl_skrining']; ?>">
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="firstRadio">1. Apakah anda merasa cepat lelah dan mudah mengantuk meskipun tidak dalam aktivitas berlebih dan cukup tidur?</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="1" value="Ya" id="firstRadio" required>
                            <label class="form-check-label" for="firstRadio">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="1" value="Tidak" id="secondRadio" required>
                            <label class="form-check-label" for="secondRadio">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="2">2. Apakah pada malam hari anda sering terbangun > 3 kali akibat buang air kecil?</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="2" value="Ya" id="firstRadio2" required>
                            <label class="form-check-label" for="firstRadio2">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="2" value="Tidak" id="secondRadio2" required>
                            <label class="form-check-label" for="secondRadio2">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="3">3. Apakah anda selalu merasa lapar walaupun sudah makan besar (nasi, lauk pauk, dsb) pada saat sebelumnya?</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="3" value="Ya" id="firstRadio3" required>
                            <label class="form-check-label" for="firstRadio3">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="3" value="Tidak" id="secondRadio3" required>
                            <label class="form-check-label" for="secondRadio3">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="4">4. Apakah anda mengalami penurunan berat badan secara drastis, meskipun makan dan minum secara normal?</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="4" value="Ya" id="firstRadio4" required>
                            <label class="form-check-label" for="firstRadio4">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="4" value="Tidak" id="secondRadio4" required>
                            <label class="form-check-label" for="secondRadio4">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="5">5. Apakah anda sering merasa haus pada saat melakukan aktifitas normal? </label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="5" value="Ya" id="firstRadio5" required>
                            <label class="form-check-label" for="firstRadio5">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="5" value="Tidak" id="secondRadio5" required>
                            <label class="form-check-label" for="secondRadio5">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="6">6. Apakah anda mengalami penglihatan kabur atau sering berganti-ganti ukuran kacamata dalam waktu 1 tahun terakhir?</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="6" value="Ya" id="firstRadio6" required>
                            <label class="form-check-label" for="firstRadio6">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="6" value="Tidak" id="secondRadio6" required>
                            <label class="form-check-label" for="secondRadio6">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="7">7. Apakah anda sering mengalami kulit kering dan gatal dengan jangka waktu yang lama?</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="7" value="Ya" id="firstRadio7" required>
                            <label class="form-check-label" for="firstRadio7">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="7" value="Tidak" id="secondRadio7" required>
                            <label class="form-check-label" for="secondRadio7">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="8">8. Apakah anda mempunyai kebiasaan makan makanan yang berasa asin?</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="8" value="Ya" id="firstRadio8" required>
                            <label class="form-check-label" for="firstRadio8">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="8" value="Tidak" id="secondRadio8" required>
                            <label class="form-check-label" for="secondRadio8">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="9">9. Apakah anda mempunyai kebiasaan mengkonsumsi minuman beralkohol?</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="9" value="Ya" id="firstRadio9" required>
                            <label class="form-check-label" for="firstRadio9">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="9" value="Tidak" id="secondRadio9" required>
                            <label class="form-check-label" for="secondRadio9">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="10">10. Apakah anda mengkonsumsi kopi?</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="10" value="Ya" id="firstRadio10" required>
                            <label class="form-check-label" for="firstRadio10">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="10" value="Tidak" id="secondRadio10" required>
                            <label class="form-check-label" for="secondRadio10">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="11">11. Apakah anda sering merokok?</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="11" value="Ya" id="firstRadio11" required>
                            <label class="form-check-label" for="firstRadio11">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="11" value="Tidak" id="secondRadio11" required>
                            <label class="form-check-label" for="secondRadio11">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="12">12. Apakah anda mengalami stress akibat pekerjaan atau masalah dalam hidup?</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="12" value="Ya" id="firstRadio12" required>
                            <label class="form-check-label" for="firstRadio12">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="12" value="Tidak" id="secondRadio12" required>
                            <label class="form-check-label" for="secondRadio12">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="13">13. Apakah anda sering berolahraga minimal 1x dalam seminggu?</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="13" value="Ya" id="firstRadio13" required>
                            <label class="form-check-label" for="firstRadio13">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="13" value="Tidak" id="secondRadio13" required>
                            <label class="form-check-label" for="secondRadio13">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="14">14. Apakah anda sering mengalami nyeri dada secara tiba-tiba?</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="14" value="Ya" id="firstRadio14" required>
                            <label class="form-check-label" for="firstRadio14">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="14" value="Tidak" id="secondRadio14" required>
                            <label class="form-check-label" for="secondRadio14">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="15">15. Apakah anda mengalami gangguan tidur / insomnia dalam jangka waktu yang lama?</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="15" value="Ya" id="firstRadio15" required>
                            <label class="form-check-label" for="firstRadio15">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="15" value="Tidak" id="secondRadio15" required>
                            <label class="form-check-label" for="secondRadio15">Tidak </label>
                        </li>
                    </ul>
                    <ul class="list-group me-2 ms-1 mt-2">
                        <li class="list-group-item list-group-item-secondary">
                            <label class="form-check-label" for="16">16. Apakah anda sering tiba-tiba mengalami keringat dingin, mual dan muntah?</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="16" value="Ya" id="firstRadio16" required>
                            <label class="form-check-label" for="firstRadio16">Ya </label>
                        </li>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="16" value="Tidak" id="secondRadio16" required>
                            <label class="form-check-label" for="secondRadio16">Tidak </label>
                        </li>
                    </ul>


                    <a href="">
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