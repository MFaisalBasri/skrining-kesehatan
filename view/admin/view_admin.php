<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../datatables/css/jquery.dataTables.css">
</head>

<body>
    <div class="table" style="overflow-x:auto;">
        <h3>Data Admin</h3>
        <table id="example" class="display" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("../../config/koneksi.php");
                $no = 0;
                $query = mysqli_query($conn, "SELECT * FROM tb_admin");
                while ($row = mysqli_fetch_assoc($query)) {
                    $no++;
                ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['no_hp']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['password']; ?></td>
                        <td>
                            <a href="dashboard.php?page=edit-admin&id=<?= $row['id']; ?>">
                                <span class="badge rounded-pill bg-warning">Edit</span>
                            </a>
                            <a onclick="return confirm('Anda yakin ingin menghapus data ini?')" href="../../model/model_hapus_admin.php?id=<?= $row['id']; ?>">
                                <span class="badge rounded-pill bg-danger">Hapus</span>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="dashboard.php?page=tambah-admin">
            <button type="button" class="btn btn-primary">Tambah</button>
        </a>
    </div>

    <script type="text/javascript" src="../../datatables/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../datatables/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>