<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="mb-4 text-center">Data Absensi Kelas</h2>
    <div class="mb-3 text-end">
        <a href="index.php" class="btn btn-primary">+ Tambah Absensi</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($koneksi, "SELECT * FROM absensi ORDER BY id DESC");
            $no = 1;
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                        <td>".$no++."</td>
                        <td>".$row['nama']."</td>
                        <td>".$row['kelas']."</td>
                        <td>".$row['tanggal']."</td>
                        <td>".$row['status']."</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
