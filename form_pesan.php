<!DOCTYPE html>
<html lang="id">

<head>
    <title>Form Pesan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-card {
            border-top: 5px solid #bd4be0;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card p-4 shadow-sm w-50 mx-auto form-card">
            <h3 class="fw-bold text-primary mb-4">Form Pesan Mahasiswa</h3>

            <!-- Form mengirim data ke hasil_pesan.php pakai metode POST -->
            <form action="hasil_pesan.php" method="POST">
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama</label>
                    <input type="text" name="nama" class="form-control" required placeholder="Contoh: Aa Ujang Eteh Neng">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Kelas</label>
                    <input type="text" name="kelas" class="form-control" required placeholder="Contoh: 3B PSTI">
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold">Pesan / Kesan</label>
                    <textarea name="pesan" class="form-control" rows="4" required placeholder="Sampaikan disini..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary fw-bold text-white">Kirim Pesan</button>
                <a href="index.php" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</body>

</html>