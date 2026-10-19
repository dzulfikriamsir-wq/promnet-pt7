<?php

// Data identitas mahasiswa
$mahasiswa = [
    [
        "nim" => "25010",
        "nama" => "Amsir Sholeh",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "amsir@upi.edu",
        "nilai" => 96
    ],
    [
        "nim" => "25020",
        "nama" => "Hamdun Robi",
        "jurusan" => "Media Informasi Viral",
        "email" => "robi@upi.edu",
        "nilai" => 58
    ],
    [
        "nim" => "25030",
        "nama" => "Alex Pertamax",
        "jurusan" => "Pendidikan Kebaikan",
        "email" => "alex@upi.edu",
        "nilai" => 75
    ],
    [
        "nim" => "25040",
        "nama" => "Amin Aplus",
        "jurusan" => "Sistem Bisnis",
        "email" => "amin@upi.edu",
        "nilai" => 63
    ],
    [
        "nim" => "25050",
        "nama" => "Minggun Rebah",
        "jurusan" => "Teknologi Tumbuhan",
        "email" => "inggun@upi.edu",
        "nilai" => 92
    ]
];

// Menentukan grade dan status
function tentukanGrade($nilai) {
    if ($nilai >= 85) {
        return "A";
    } elseif ($nilai >= 70) {
        return "B";
    } elseif ($nilai >= 60) {
        return "C";
    } else {
        return "D";
    }
}

function tentukanStatus($nilai) {
    return $nilai >= 70 ? "Lulus" : "Tidak Lulus";
}
?>

<!-- Membuat HTML buat menampilkan Tabel : di diambil menggunakan boostrrap -->
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web pt7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <style>
        /* TEMA: Ungu, Biru, Putih */
        body {
            background-color: #f8f9fa; 
        }
        .header-custom {
            background-color: #bd47cc;
            color: #f1f0eb; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .btn-custom {
            background-color: skyblue; 
            color: navy;
            font-weight: bold;
            border: none;
        }
        .btn-custom:hover {
            background-color: #2157cc;
        }
        .table-custom thead {
            background-color: #bb35dc;
            color: white;
        }
    </style>

</head>
  <body>
    <div class="container mt-5"> 
        <div class="header-custom mb-4 text-center"> 
            <h2 class> Daftar Mahasiswa </h2>
            <p> Kanal Akademi by Am.Sir</p>
        </div> 

         <div class="table-responsive bg-white p-3 rounded shadow-sm">
            <table class="table table-bordered table-hover table-custom  align-middle">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;

                    foreach ($mahasiswa as $mhsw) :

                        // Menentukan grade berdasarkan nilai
                        if ($mhsw["nilai"] >= 85) {
                            $grade = "A";
                        } elseif ($mhsw["nilai"] >= 70) {
                            $grade = "B";
                        } elseif ($mhsw["nilai"] >= 60) {
                            $grade = "C";
                        } else {
                            $grade = "D";
                        }

                        // Menentukan status kelulusan
                        if ($mhsw["nilai"] >= 70) {
                            $status = "<span class='badge bg-success'>Lulus</span>";
                        } else {
                            $status = "<span class='badge bg-danger'>Tidak Lulus</span>";
                        }
                    ?>

                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $mhsw["nim"]; ?></td>
                        <td><?= $mhsw["nama"]; ?></td>
                        <td><?= $mhsw["jurusan"]; ?></td>
                        <td><?= $mhsw["nilai"]; ?></td>
                        <td class="fw-bold text-center"><?= $grade; ?></td>
                        <td class="text-center"><?= $status; ?></td>

                       <td>
                            <a href="detail.php?nim=<?= urlencode($mhsw['nim']); ?>&nama=<?= urlencode($mhsw['nama']); ?>&jurusan=<?= urlencode($mhsw['jurusan']); ?>&email=<?= urlencode($mhsw['email']); ?>&nilai=<?= urlencode($mhsw['nilai']); ?>&grade=<?= urlencode($grade); ?>&status=<?= urlencode(strip_tags($status)); ?>"
                            class="btn btn-outline-primary btn-sm">
                                Lihat Detail
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
         </div>

                  <!-- Membuat Tombol Kirim Pesan di bawah tabel -->
            <div class="text-center mt-4 mb-4">
                <a href="form_pesan.php" class="btn btn-custom">
                    Kirim Pesan
                </a>
            </div>
    </div>    
    
  </body>
</html>
