
<?php
    if(!isset($_GET["nama"]) || 
       !isset($_GET["nim"]) ||
       !isset($_GET["kelas"]) ||
       !isset($_GET["fakultas"]) ||
       !isset($_GET["prodi"])){
        // redirect
        header("Location: latihan1.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detai Siswa</title>
    <style>
        li img {
            width: 77px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h3>Detail Siswa</h3>
    <ul>
        <li>
            <img src="img/<?= $_GET["gambar"]; ?>" alt="">
        </li>
        <li>Nama : <?= $_GET["nama"]; ?></li>
        <li>NIM : <?= $_GET["nim"]; ?></li>
        <li>Kelas : <?= $_GET["kelas"]; ?></li>
        <li>Fakultas : <?= $_GET["fakultas"]; ?></li>
        <li>Prodi : <?= $_GET["prodi"]; ?></li>
    </ul>
    <br>
    <a href="latihan1.php">Kembali ke daftar Siswa</a>
</body>
</html>