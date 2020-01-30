<?php
require 'functions.php';

    if (isset($_POST["register"])) {
        if (registrasi($_POST) > 0 ) {
            echo "<script>
                    alert('user baru berhasil di tambahkan!');
                 </script>";
        }else {
            echo mysqli_error($conn);
            // echo "<script>
            //         alert('user baru gagal di tambahkan!');
            //      </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h2>Halaman Registrasi</h2>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Passwod : </label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Register!</button>
            </li>
        </ul>
    </form>

</body>
</html>