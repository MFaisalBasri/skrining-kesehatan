<?php
require_once("../../config/koneksi.php");

$query = "SELECT SUM(hipertensi = 'resiko tinggi') AS hipertensi,
                 SUM(ginjal = 'resiko tinggi') AS ginjal,
                 SUM(diabetes = 'resiko tinggi') AS diabetes,
                 SUM(jantung = 'resiko tinggi') AS jantung
          FROM tb_hasilskrining";

$result = $conn->query($query);

$query2 = "SELECT SUM(hipertensi = 'resiko sedang') AS hipertensi,
                 SUM(ginjal = 'resiko sedang') AS ginjal,
                 SUM(diabetes = 'resiko sedang') AS diabetes,
                 SUM(jantung = 'resiko sedang') AS jantung
          FROM tb_hasilskrining";

$result2 = $conn->query($query2);

$query3 = "SELECT SUM(hipertensi = 'resiko rendah') AS hipertensi,
                 SUM(ginjal = 'resiko rendah') AS ginjal,
                 SUM(diabetes = 'resiko rendah') AS diabetes,
                 SUM(jantung = 'resiko rendah') AS jantung
          FROM tb_hasilskrining";

$result3 = $conn->query($query3);

// Ambil data dari hasil kueri
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Data untuk grafik
    $data = array(
        'hipertensi' => $row['hipertensi'],
        'ginjal' => $row['ginjal'],
        'diabetes' => $row['diabetes'],
        'jantung' => $row['jantung']
    );
} else {
    // Handle jika tidak ada data ditemukan
    echo "Tidak ada data ditemukan.";
}

// Ambil data dari hasil kueri
if ($result2->num_rows > 0) {
    $row2 = $result2->fetch_assoc();

    // Data untuk grafik
    $data2 = array(
        'hipertensi' => $row2['hipertensi'],
        'ginjal' => $row2['ginjal'],
        'diabetes' => $row2['diabetes'],
        'jantung' => $row2['jantung']
    );
} else {
    // Handle jika tidak ada data ditemukan
    echo "Tidak ada data ditemukan.";
}

// Ambil data dari hasil kueri
if ($result3->num_rows > 0) {
    $row3 = $result3->fetch_assoc();

    // Data untuk grafik
    $data3 = array(
        'hipertensi' => $row3['hipertensi'],
        'ginjal' => $row3['ginjal'],
        'diabetes' => $row3['diabetes'],
        'jantung' => $row3['jantung']
    );
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
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="card">
        <div class="card-body mt-4">
            <div class="row">
                <div class="col-md-8">
                    <div class="d-flex justify-content-center">
                        <div class="me-3">
                            <img src="../../asset/img/logo-puskesmas.jpeg" alt="" class="mb-3" style="width: 100px;">
                        </div>
                        <div class="text-center">
                            <h3 class="mb-3">SELAMAT DATANG DI SISTEM INFORMASI<br>
                                SKRINNING KESEHATAN PENYAKIT TIDAK MENULAR <br>
                                UPTD PUSKESMAS BOJONG MENTENG <br>
                                KOTA BEKASI</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-8 text-center">
                    <h5>GRAFIK DETEKSI DINI PENYAKIT TIDAK MENULAR DI WILAYAH BOJONG MENTENG</h5>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        const data = {
            labels: ['Hipertensi', 'Ginjal', 'Diabetes', 'jantung'],
            datasets: [{
                    label: 'Resiko Tinggi',
                    data: <?php echo json_encode(array_values($data)); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)', // Background color
                    borderColor: 'rgba(255, 99, 132, 1)', // Border color
                    borderWidth: 1
                },
                {
                    label: 'Resiko Sedang',
                    data: <?php echo json_encode(array_values($data2)); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Background color
                    borderColor: 'rgba(54, 162, 235, 1)', // Border color
                    borderWidth: 1
                },
                {
                    label: 'Resiko Rendah',
                    data: <?php echo json_encode(array_values($data3)); ?>,
                    borderWidth: 1
                }
            ]
        };

        const options = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>