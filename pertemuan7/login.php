<?php
    // cek apakah tombol submit sudah di tekan atau belum?
    if(isset($_POST["submit"])){
        // cek username dan password
        if($_POST["username"] == "admin" && $_POST["password"] == "admin"){
            // jika benar, redirec ke halaman admin
            header("Location: admin.php");
            exit;
        }else{
            // jika salah
            $error = true;
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h2>Login Admin</h2>
    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic">username / password salah!</p>
    <?php endif; ?>
    <ul>
        <form action="admin.php" method="POST">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="pass" >Password : </label>
                <input type="password" name="password" id="pass">
            </li>
            <li>
                <button type="submit" name="submit" >Login</button>
            </li>
        </form>
    </ul>
</body>
</html>