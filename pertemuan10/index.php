<?php
   require "functions.php";
   $siswa = query("SELECT * FROM siswa");
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
   <h2>Daftar Siswa</h2>
   <a href="tambah.php">Tambah Data Siswa</a><br><br>
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
               <a href="">ubah</a> |
               <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">hapus</a>
            </td>
         </tr>
         <?php $i++; ?>
      <?php endforeach; ?>
   </table>
</body>
</htmlh