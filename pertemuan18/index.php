<?php
   session_start();

   if (!isset($_SESSION["login"])) {
      header("Location: login.php");
      exit;
   }

   require "functions.php";

   // pagination
   $jumlahDataPerHalaman = 2;
   $jumlahData = count(query("SELECT * FROM siswa"));
   $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
   $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
   $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

   $siswa = query("SELECT * FROM siswa LIMIT $awalData, $jumlahDataPerHalaman");

   // tombol cari di click
   if (isset($_POST["cari"])) {
      $siswa = cari($_POST["keyword"]);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>
<body>
   <a href="logout.php">Logout</a>
   <br>
   <h2>Daftar Siswa</h2>
   <a href="tambah.php">Tambah Data Siswa</a><br><br>
   <!-- Cari siswa -->
   <form action="" method="POST">
      <input type="text" name="keyword" size="40" autofocus placeholder="masukkan kata kunci..!" autocomplete="off">
      <button type="submit" name="cari">Cari!</button>
   </form>

   <!-- navigasi -->
   <?php if($halamanAktif > 1) : ?>
      <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
   <?php endif; ?>

   <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
      <?php if($i == $halamanAktif) : ?>
         <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
      <?php else: ?>
         <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
      <?php endif; ?>
   <?php endfor; ?>

   <?php if($halamanAktif < $jumlahHalaman) : ?>
      <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
   <?php endif; ?>

   <!-- link pagination -->
   <br>
   <table border="1" cellpadding="10" cellspacing="0">
      <tr>
         <th>No.</th>
         <th>Gambar</th>
         <th>NRP</th>
         <th>Nama</th>
         <th>Email</th>
         <th>Jurusan</th>
         <th>Aksi</th>
      </tr>

      <?php $i = 1; ?>
      <?php foreach( $siswa as $row) : ?>
         <tr>
            <td><?= $i; ?></td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50" height="63" alt="gambar"></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            <td>
               <a href="ubah.php?id=<?= $row['id']; ?>">ubah</a> |
               <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin?')">hapus</a>
            </td>
         </tr>
         <?php $i++; ?>
      <?php endforeach; ?>
   </table>
</body>
</htmlh