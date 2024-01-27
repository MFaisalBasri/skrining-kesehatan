<?php
require_once("../../config/koneksi.php");

$no = mysqli_query($conn, "SELECT id FROM tb_admin ORDER BY id DESC");
$admin = mysqli_fetch_array($no);
$kode = $admin['id'];

$urut = substr($kode, 7, 3);
$tambah = (int) $urut + 1;
$bln = date("m");
$thn = date("y");

if (strlen($tambah) == 1) {
    $format = "adm-" . $thn . $bln . "0" . $tambah;
} else {
    $format = "adm-" . $thn . $bln . $tambah;
}

?>
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
        <?php
        require_once("../../config/koneksi.php");
        $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE id='" . $_GET['id'] . "'");
        $row = mysqli_fetch_array($cek);
        ?>
        <div class="row justify-content-center mt-3 mb-2">
            <h1 class="text-center">Ubah Data Admin</h1>
            <div class="col-md-10 col-11 p-5 bg-light rounded-3">
                <form action="../../model/model_edit_admin.php" method="post">
                    <div class="">
                        <label for="nonik" class="form-label">ID</label>
                        <input type="text" class="form-control" id="nonik" name="id" value="<?= $row['id']; ?>" readonly>
                    </div>
                    <div class="mt-3">
                        <label for="inputNamaPeserta" class="">Nama</label>
                        <input type="text" class="form-control" id="inputNamaPeserta" name="nama" value="<?= $row['nama']; ?>">
                    </div>
                    <div class="">
                        <label for="inputHp" class="form-label">No Handphone</label>
                        <input type="text" class="form-control" id="inputHp" name="no_hp" value="<?= $row['no_hp']; ?>">
                    </div>
                    <div class="">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" value="<?= $row['email']; ?>" required>
                    </div>
                    <div class="">
                        <label for="inputSandi" class="form-label">Password</label>
                        <input type="text" class="form-control" id="inputSandi" name="pw" value="<?= $row['password']; ?>" required>
                    </div>
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