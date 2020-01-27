<?php

function salam($pagi, $nama){
    return "Selamat $pagi, $nama!";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Simple</title>
</head>
<body>
    <h2><?= salam('malam','Agus'); ?></h2>
</body>
</html>
