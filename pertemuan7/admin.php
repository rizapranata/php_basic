<?php
    if(!isset($_POST["submit"])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <h3>Selamat datang, <?= $_POST["username"]; ?>!</h3>
    <br><br>

    <a href="login.php">Logout</a>
</body>
</html>