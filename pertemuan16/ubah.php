<?php
session_start();

if (!isset($_SESSION["login"])) {
   header("Location: login.php");
   exit;
}

require 'functions.php';

// ambil data di url
$id = $_GET["id"];
// query data mahasiswa berdasarakan id
$query = "SELECT * FROM siswa WHERE id = $id";
$siswa = query($query)[0];


// cek apakah tombol submit sudah di tekan?
if (isset($_POST["submit"])) {
    // cek apakah data berhasil di ubah atu tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil di ubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal di ubah');
            document.location.href = 'index.php';
        </script>
    ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data</title>
</head>

<body>
    <h2>Ubah Data Siswa</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $siswa["id"]; ?>">
        <input type="hidden" name="gambarlama" value="<?= $siswa["gambar"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP</label>
                <input type="text" name="nrp" id="nrp" value="<?= $siswa["nrp"]; ?>" required>
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= $siswa["nama"]; ?>" required>
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required value="<?= $siswa["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $siswa["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <img src="img/<?= $siswa["gambar"] ?>" alt="" width="50" height="63">
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>