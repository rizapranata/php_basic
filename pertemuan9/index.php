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

   <table border="1" cellpadding="10" cellspacing="0">
      <tr>
         <th>No.</th>
         <th>Aksi</th>
         <th>Gambar</th>
         <th>NRP</th>
         <th>Nama</th>
         <th>Email</th>
         <th>Jurusan</th>
      </tr>

      <?php $i = 1; ?>
      <?php foreach( $siswa as $row) : ?>
         <tr>
            <td><?= $i; ?></td>
            <td>
               <a href="">ubah</a> |
               <a href="">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="70" height="93" alt="gambar"></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
         </tr>
         <?php $i++; ?>
      <?php endforeach; ?>
   </table>
</body>
</htmlh