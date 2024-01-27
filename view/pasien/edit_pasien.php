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

        <!-- <?php
        require_once("../../config/koneksi.php");
        $cek = mysqli_query($conn, "SELECT * FROM tb_peserta WHERE nik='" . $_GET['nik'] . "'");
        $row = mysqli_fetch_array($cek);
        ?> -->

        <div class="row justify-content-center mt-3 mb-2">
            <div class="col-md-6 col-11 p-5 bg-light rounded-3">
                <form action="../../model/model_edit_pasien.php" method="post">
                    <h1 class="text-center">Ubah Data Pasien</h1>
                    <div>
                        <label for="">Domisili</label>
                        <li class="list-group-item aktif">
                            <input class="form-check-input me-1" type="radio" name="domisili" value="Ya" id="firsRadio" <?php if ($row['domisili'] == 'Ya') echo 'checked' ?>>
                            <label class="form-check-label" for="firsRadio">Ya </label>
                        </li>
                        <li class="list-group-item aktif mb-2">
                            <input class="form-check-input me-1" type="radio" name="domisili" value="Tidak" id="secondRadio" <?php if ($row['domisili'] == 'Tidak') echo 'checked' ?>>
                            <label class="form-check-label" for="secondRadio">Tidak </label>
                        </li>
                    </div>
                    <div>
                        <label for="">Tanggal Lahir</label><br>
                        <input type="date" name="tglLahir" value="<?= $row['tgl_lahir']; ?>">
                    </div>
                    <div class="">
                        <label for="nonik" class="form-label">No. NIK</label>
                        <input type="text" class="form-control" id="nonik" name="nik" value="<?= $_GET['nik']; ?>" readonly>
                    </div>
                    <div class="mt-3">
                        <label for="inputNamaPeserta" class="">Nama</label>
                        <input type="text" class="form-control" id="inputNamaPeserta" name="nama" value="<?= $row['nama']; ?>">
                    </div>
                    <div class="">
                        <label for="inputAlamatp" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="inputAlamatp" name="alamat" value="<?= $row['alamat']; ?>">
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <label for="">RT</label>
                            <input type="text" class="form-control" id="rt" name="rt" value="<?= $row['rt']; ?>">
                        </div>
                        <div>
                            <label for="">RW</label>
                            <input type="text" class="form-control" id="rw" name="rw" value="<?= $row['rw']; ?>">
                        </div>
                    </div>
                    <div class="">
                        <label for="inputHp" class="form-label">No Handphone</label>
                        <input type="text" class="form-control" id="inputHp" name="no_hp" value="<?= $row['no_hp']; ?>">
                    </div>
                    <div class="">
                        <label for="inputHp" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputHp" name="email" value="<?= $row['email']; ?>">
                    </div>
                    <div class="">
                        <label for="inputEmail" class="form-label">Nama Keluarga</label>
                        <input type="text" class="form-control" id="inputEmail" name="nama_keluarga" value="<?= $row['nama_keluarga']; ?>">
                    </div>
                    <div class="">
                        <label for="inputalamatk" class="form-label">Alamat Keluarga</label>
                        <input type="text" class="form-control" id="inputalamatk" name="alamat_keluarga" value="<?= $row['alamat_keluarga']; ?>">
                    </div>
                    <div class="">
                        <label for="inputhpkeluarga" class="form-label">No Hp Keluarga</label>
                        <input type="text" class="form-control" id="inputhpkeluarga" name="nohp_keluarga" value="<?= $row['nohp_keluarga']; ?>">
                    </div>
                    <div class="">
                        <label for="inputemailkeluarga" class="form-label">Email Keluarga</label>
                        <input type="text" class="form-control" id="inputemailkeluarga" name="email_keluarga" value="<?= $row['email_keluarga']; ?>">
                    </div>
                    <div class="d-grid gap-2 col-6 mt-2 mb-3">
                        <button class="btn btn-primary" type="submit" name="simpan">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>