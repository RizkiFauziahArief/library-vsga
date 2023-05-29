<?php
// Tangkap variabel dari form
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$vta = $_POST["ttugas"];
$vtb = $_POST["tuts"];
$vtc = $_POST["tuas"];
$vtd = ($vta * 0.2) + ($vtb * 0.3) + ($vtc * 0.5);

if ($vtd >= 90)
    $grade = "A";
elseif ($vtd >= 80)
    $grade = "B";
elseif ($vtd >= 60)
    $grade = "C";
else
    $grade = "D";

// File json yang akan dibaca
$file = "resultkhs.json";

// Menghapus konten file jika sudah ada
if (file_exists($file)) {
    file_put_contents($file, '');
}

// Data array baru
$data = array(
    array(
        'nama' => $nama,
        'kelas' => $kelas,
        'tugas' => $vta,
        'uts' => $vtb,
        'uas' => $vtc,
        'nilai' => $vtd,
        'grade' => $grade
    )
);

$konten = json_encode($data, JSON_PRETTY_PRINT);

//menyimpan konten di file
file_put_contents($file, $konten);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            padding-bottom: 50px;
        }
        table {
            border-collapse: collapse;
        }
        table,
        th,
        td {
            border: 3px solid black;
            padding: 8px;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Program Menghitung Nilai Mata Kuliah</a>
        </nav>
    </header><br><br>

    <div class="container">
        <h2 class="text-center">Data Nilai Mahasiswa</h2><br><br>
        <h5 class="text-left">Nama : <?php echo $nama; ?></h5>
        <h5 class="text-left">Kelas : <?php echo $kelas; ?></h5><br><br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Tugas</th>
                        <th scope="col">UTS</th>
                        <th scope="col">UAS</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Grade</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $value['tugas']; ?></td>
                                    <td><?php echo $value['uts']; ?></td>
                                    <td><?php echo $value['uas']; ?></td>
                                    <td><?php echo $value['nilai']; ?></td>
                                    <td><?php echo $value['grade']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div><br>
                <div class="text-center">
                    <a href="inputkhs.html" class="btn btn-primary">Kembali</a>
                </div>

                <footer class="mt-5 text-center">
                    <p>&copy; 2023 By Rizki Fauziah Arief</p>
                </footer>
            </div>
        </body>
</html>
