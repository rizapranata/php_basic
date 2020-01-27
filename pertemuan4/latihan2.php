<?php


// pengulangan pada php
// for / foreach
$angka = [3,4,6,3,6,4,24,45,30];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {clear: both ;}
    </style>
</head>
<body>
   <!--menggunakan for -->
   <?php for($i = 0; $i < count($angka); $i++) { ?>
      <div class='kotak'><?= $angka[$i]; ?></div>
   <?php } ?>

   <div class="clear"></div>
   
    <!--menggunakan foreach -->
   <?php foreach ($angka as $a) { ?>
     <div class='kotak'><?= $a; ?></div>
   <?php } ?>

   <div class="clear"></div>

   <!--menggunakan foreach yg lebih ringkas-->
   <?php foreach ($angka as $a ) : ?>
      <div class='kotak'><?= $a; ?></div>
   <?php endforeach ?>
</body>
</html>