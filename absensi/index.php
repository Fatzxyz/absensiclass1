<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Absensi Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="mb-4 text-center">Form Absensi Kelas</h2>
    <div class="card shadow-sm p-4">
        <form action="proses.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <select name="kelas" class="form-select" required>
                    <option value="">-- Pilih Kelas --</option>
                    <option value="X-RPL">X-RPL</option>
                    <option value="X-AKL">X-AKL</option>
                    <option value="X-TM1">X-TM1</option>
                    <option value="X-TM2">X-TM2</option>
                    <option value="X-TKJ">X-TKJ</option>
                    <option value="XI-TKJ/RPL">XI-TKJ/RPL</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select" required>
                    <option value="Hadir">Hadir</option>
                    <option value="Izin">Izin</option>
                    <option value="Sakit">Sakit</option>
                    <option value="Alpa">Alpa</option>
                </select>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    <div class="text-center mt-3">
        <a href="data.php" class="btn btn-dark">Lihat Data Absensi</a>
    </div>
</div>

</body>
</html>
