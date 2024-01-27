<?php
require_once("../../config/koneksi.php");

$query = "SELECT DISTINCT tgl_skrining
          FROM tb_hasilskrining";

$result = $conn->query($query);

$tanggalOptions = array();

// Ambil data dari hasil kueri
if ($result->num_rows > 0) {
    // Mengambil nilai RT dari setiap baris hasil query
    while ($row = $result->fetch_assoc()) {
        $tanggalOptions[] = $row['tgl_skrining'];
    }
} else {
    // Handle jika tidak ada data ditemukan
    echo "Tanggal tidak ditemukan!";
}

$query2 = "SELECT DISTINCT hipertensi
          FROM tb_hasilskrining";

$result2 = $conn->query($query2);

$resikoOptions = array();


if ($result2->num_rows > 0) {
    // Mengambil nilai RT dari setiap baris hasil query
    while ($row2 = $result2->fetch_assoc()) {
        $resikoOptions[] = $row2['hipertensi'];
    }
} else {
    // Handle jika tidak ada data ditemukan
    echo "Tidak ada data ditemukan.";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Skrining</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../datatables/css/jquery.dataTables.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Buttons -->
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>

    <!-- JSZip -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

    <!-- PDFMake -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

    <!-- DataTables Buttons HTML5 -->
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>

    <!-- DataTables Buttons Print -->
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="script.js"></script>


    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="card">
        <div class="card-body mt-4">
            <h3>Data Hasil Skrining Riwayat Kesehatan</h3>
            <div class="mt-2">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="puskesmas" class="form-label">Puskesmas</label>
                                <input type="text" class="form-control" id="puskesmas" value="Puskesmas Bojong Menteng" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="rtDropdown">Tanggal Skrining</label>
                                <select class="form-control" id="rtDropdown" name="tgl_skrining">
                                    <option value="" selected disabled>Pilih Tanggal</option>
                                    <?php
                                    foreach ($tanggalOptions as $tgl) {
                                        echo "<option value=\"$tgl\">$tgl</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="rtDropdown">Tingkat Resiko Penyakit</label>
                                <select class="form-control" id="rtDropdown" name="tingkat_resiko">
                                    <option value="" selected disabled>Pilih tingkat resiko</option>
                                    <?php
                                    foreach ($resikoOptions as $resiko) {
                                        echo "<option value=\"$resiko\">$resiko</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Cari" style="margin-top:30px;">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="table" style="overflow-x:auto;">
                <table id="example" class="display" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tanggal Skrining</th>
                            <th>Hipertensi</th>
                            <th>Diabetes</th>
                            <th>Ginjal</th>
                            <th>Jantung</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        $query = mysqli_query($conn, "SELECT * FROM tb_hasilskrining");

                        // Tangani form submission untuk pencarian
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Ambil nilai dari dropdown
                            $tgl_skrining = isset($_POST['tgl_skrining']) ? $_POST['tgl_skrining'] : '';
                            $tingkat_resiko = isset($_POST['tingkat_resiko']) ? $_POST['tingkat_resiko'] : '';

                            // Lakukan pencarian data berdasarkan nilai dropdown
                            $sql = "SELECT * FROM tb_hasilskrining WHERE tgl_skrining = '$tgl_skrining' OR hipertensi = '$tingkat_resiko'";
                            $query = mysqli_query($conn, $sql);

                            // Periksa apakah hasil pencarian kosong
                            if (mysqli_num_rows($query) == 0) {
                                echo "<tr><td colspan='12'>Data tidak ditemukan.</td></tr>";
                            }
                        }

                        while ($row = mysqli_fetch_assoc($query)) {
                            $no++;
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['nik']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['tgl_skrining']; ?></td>
                                <td><?= $row['hipertensi']; ?></td>
                                <td><?= $row['diabetes']; ?></td>
                                <td><?= $row['ginjal']; ?></td>
                                <td><?= $row['jantung']; ?></td>
                                <td>
                                    <a onclick="return confirm('Anda yakin ingin menghapus data ini?')" href="../../model/hapus_hasilSkrining.php?nik=<?= $row['nik']; ?>">
                                        <span class="badge rounded-pill bg-danger">Hapus</span>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="../pasien/tambah_pasien.php">
                    <!-- <button type="button" class="btn btn-primary">Tambah</button> -->
                </a>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <!-- DataTables and Buttons scripts -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
</body>

</html>