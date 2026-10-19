<?php
if (!isset($_POST["nama"]) || !isset($_POST["kelas"])) {
    header("Location: form_pesan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title>Hasil Pesan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="alert shadow-sm w-50 mx-auto" role="alert">
            <h4 class="alert-heading fw-bold">Alhamdulillah.. Pesan terkirim!</h4>
            <hr>
            <p>Hatur Thankyou, <strong><?= htmlspecialchars($_POST["nama"]); ?></strong>!</p>
            <ul class="list-group mb-3">
                <li class="list-group-item"><strong>Nama:</strong> <?= htmlspecialchars($_POST["nama"]); ?></li>
                <li class="list-group-item"><strong>Kelas:</strong> <?= htmlspecialchars($_POST["kelas"]); ?></li>
                <li class="list-group-item"><strong>Pesan / Kesan:</strong> <br> <?= nl2br(htmlspecialchars($_POST["pesan"])); ?></li>
            </ul>
            <a href="index.php" class="btn btn-primary w-100">Kembali ke Daftar Mahasiswa</a>
        </div>
    </div>
</body>

</html>


