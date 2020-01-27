<?php
// array assosiatif

$mhs = [
    [
        "nama" => "Riza Pratama",
        "nim" => "171011400112",
        "kelas" => "05TPLE002",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika",
        "gambar" => "Riza.jpg"
    ],
    [
        "nama" => "Amalia",
        "nim" => "171011400111",
        "kelas" => "05TPLE002",
        "fakultas" => "Ekonomi",
        "prodi" => "Management",
        "gambar" => "Amalia.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Assosiatif</title>
    <style>
        .nama {
            background-color: salmon;
        }

        li img {
            width: 77px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach ($mhs as $m) : ?>
        <ul>
            <li>
                <img src="img/<?= $m["gambar"]; ?>">
            </li>
            <li>Nama : <?= $m["nama"]; ?></li>
            <li>NIM  : <?= $m["nim"]; ?></li>
            <li>Kelas: <?= $m["kelas"]; ?></li>
            <li>Fakultas: <?= $m["fakultas"]; ?></li>
            <li>Prodi: <?= $m["prodi"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>

