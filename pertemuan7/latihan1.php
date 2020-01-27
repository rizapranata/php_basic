<?php
// SUPERGLOBALS $_GET
// variable global milik PHP
// merupakan array assosiative
//  var_dump($_GET);
$siswa = [
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
    <title>Daftar Nama Siswa</title>
    
</head>
<body>
    <h2>Daftar Nama Siswa</h2>
    <ul>
        <?php foreach ($siswa as $s) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $s["nama"]; ?>&nim=<?= $s["nim"]; ?>&kelas=<?= $s["kelas"];?>&fakultas=<?= $s["fakultas"]; ?>&prodi=<?= $s["prodi"]; ?>&gambar=<?= $s["gambar"];?>"><?= $s["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>