<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class=" bg-secondary">
    <div class="container">
        <div class="row justify-content-center mt-3 mb-2">
            <div class="col-md-6 col-11 p-5 bg-light rounded-3">
                <form action="../model/simpan_peserta.php" method="post">
                    <h1 class="text-center">Biodata</h1>
                    <input type="hidden" name="domisili" value="<?= $_GET['domisili']  ?>">
                    <input type="hidden" name="tgl" value="<?= $_GET['tgl']  ?>">
                    <div class="mt-3">
                        <label for="inputNamaPeserta" class="">Nama</label>
                        <input type="text" class="form-control" id="inputNamaPeserta" name="nama">
                    </div>
                    <div class="">
                        <label for="nonik" class="form-label">No. NIK</label>
                        <input type="text" class="form-control" id="nonik" name="nik" required>
                    </div>
                    <div class="">
                        <label for="inputAlamatp" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="inputAlamatp" name="alamat">
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <label for="">RT</label>
                            <input type="text" class="form-control" id="rt" name="rt">
                        </div>
                        <div>
                            <label for="">RW</label>
                            <input type="text" class="form-control" id="rw" name="rw">
                        </div>
                    </div>
                    <div class="">
                        <label for="inputHp" class="form-label">No Handphone</label>
                        <input type="text" class="form-control" id="inputHp" name="no_hp">
                    </div>
                    <div class="">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email">
                    </div>
                    <div>
                        <label for="">Tanggal Skrining</label><br>
                        <input type="date" name="tglSkrining">
                    </div>
                    <ul class="list-group p-3">
                        <li class="list-group-item list-group-item-secondary" aria-current="true">Keluarga yang bisa dihubungi</li>
                        <div class=" mt-3">
                            <label for="inputNama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="inputNama" name="namaKeluarga">
                        </div>
                        <div class="">
                            <label for="inputAlamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="inputAlamat" name="alamatKeluarga">
                        </div>
                        <div class="">
                            <label for="inputEmail" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="inputEmail" name="telepon">
                        </div>
                        <div class="">
                            <label for="inputEmail2" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail2" name="emailKeluarga">
                        </div>
                    </ul>
                    <div class="d-grid gap-2 col-6 ms-3 mb-3">

                        <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <section class="navbar bg-body-tertiary  justify-content-evenly">
            <div class="d-grid gap-2  d-flex">
                <span>UPTD Bojong Menteng Kota Bekasi 2023</span>
            </div>
        </section>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>