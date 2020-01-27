<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpbasic");
// cek apakah tombol submit sudah di tekan?
if (isset($_POST["submit"])) {
    $nrp  = $_POST["nrp"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];
    
    // query insert data
    $query = "INSERT INTO siswa VALUES ('','$nrp','$nama','$email','$jurusan','$gambar')";

    mysqli_query($conn, $query);
    
    // cek apakah data berhasil di tambah atu tidak
    if (mysqli_affected_rows( $conn) > 0) {
        echo "berhasil";
    } else {
        echo "Gagal!\n";
        echo mysqli_error($conn);
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
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>