<?php

   $mhs = [
      ["Riza Pratama", "171011400112","Teknik Informatika"],
      ["Agus salim","171011400011","Teknik Mesin"]
   ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Daftar Mahasiswa</title>
</head>
<body>
   <h2>Daftar Mahasiswa</h2>

   <ul>
      <?php foreach ($mhs as $m ) : ?>
         <li><?= $m[0]; ?></li>
         <li><?= $m[1]; ?></li>
         <li><?= $m[2]; ?></li>
         <br>
      <?php endforeach; ?>
   </ul> 
</body>
</html>