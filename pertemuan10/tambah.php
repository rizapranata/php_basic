<?php
require 'functions.php';
// cek apakah tombol submit sudah di tekan?
if (isset($_POST["submit"])) {
    // cek apakah data berhasil di tambah atu tidak
   if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil di tambahkan');
                document.location.href = 'index.php';
            </script>
        ";
   }else{
        echo "
        <script>
            alert('data gagal di tambahkan');
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
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nrp">NRP</label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>