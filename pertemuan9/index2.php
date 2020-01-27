<?php
   // koneksi ke database
   $conn = mysqli_connect("localhost","root", "", "phpbasic");
   $query = "SELECT * FROM siswa";
   // ambil data dari Siswa / query data siswa
   $result = mysqli_query($conn, $query);

   // ambil data (fetch) msiswa dari object result
   // mysqli_fetch_row() // mengembalikan array numerik
   // mysqli_fetch_assoc() // mengembalikan sossosiative array
   // mysqli_fetch_array() // mengembalikan keduanya
   // mysqli_fetch_object()

//   while( $mhs = mysqli_fetch_assoc($result) ) {
//      var_dump($mhs);
//   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Siswa</title>
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
      <?php while($row = mysqli_fetch_assoc($result)) : ?>
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
      <?php endwhile; ?>
   </table>
</body>
</htmlh