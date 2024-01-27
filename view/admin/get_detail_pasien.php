<?php 
require_once("../../config/koneksi.php");
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nik'])) {
    // Ambil data NIK dari $_POST
    $nik = $_GET['nik'];

    // Lakukan kueri untuk mendapatkan detail data berdasarkan NIK
    $query = mysqli_query($conn, "SELECT * FROM tb_peserta WHERE nik = '$nik'");
    $row = mysqli_fetch_assoc($query);
    
    echo "
    <div class=\"float-end mb-1\">
    <a href=\"dashboard.php?page=edit-pasien&nik={$row['nik']}\">
        <button type=\"button\" class=\"btn btn-warning\">Edit</button>
    </a>
    <a onclick=\"return confirm('Anda yakin ingin menghapus data ini?')\" href=\"../../model/hapus_pasien.php?nik={$row['nik']}\">
        <button type=\"button\" class=\"btn btn-danger\">Hapus</button>
    </a>
    </div>
";

    echo "
    <table class=\"table table-striped\">
        <tr>
            <td>NIK</td>
            <td>" . $row['nik'] . "</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>" . $row['nama'] . "</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>" . $row['tgl_lahir'] . "</td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td>" . $row['domisili'] . "</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>" . $row['alamat'] . "</td>
        </tr>
        <tr>
            <td>RT</td>
            <td>" . $row['rt'] . "</td>
        </tr>
        <tr>
            <td>RW</td>
            <td>" . $row['rw'] . "</td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td>" . $row['no_hp'] . "</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>" . $row['email'] . "</td>
        </tr>
        <tr>
            <td>Tanggal Skrining</td>
            <td>" . $row['tgl_skrining'] . "</td>
        </tr>
        <tr>
            <td>Nama Keluarga</td>
            <td>" . $row['nama_keluarga'] . "</td>
        </tr>
        <tr>
            <td>Alamat Keluarga</td>
            <td>" . $row['alamat_keluarga'] . "</td>
        </tr>
        <tr>
            <td>No Hp Keluarga</td>
            <td>" . $row['nohp_keluarga'] . "</td>
        </tr>
        <tr>
            <td>Email Keluarga</td>
            <td>" . $row['email_keluarga'] . "</td>
        </tr>
    </table>
";

    exit; // Keluar dari skrip PHP setelah menampilkan detail
}
