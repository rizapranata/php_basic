<?php
    if (isset($_GET["message"])) {
        $message = "<p style='color:red'>{$_GET["message"]}</p>";
    }else{
        $message = "";
    }

    // take value name if available
    if (isset($_GET["name"])) {
        $value_name = $_GET["name"];
    }else{
        $value_name = "";
    }

    // take value email if available
    if (isset($_GET["email"])) {
        $value_email = $_GET["email"];
    }else{
        $value_email = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <h2>Login Form</h2>
        <?= $message ?>
        <form action="process.php" method="POST">
            <li>Name :<input type="text" name="name" value="<?= $value_name; ?>"></li><br>
            <li>Eemail :<input type="email" name="email" value="<?= $value_email; ?>"></li><br>
            <li><input type="checkbox" name="belajar" value="php">Belajar PHP</li><br>
            <li><input type="submit" name="submit" value="Submit"></li>
        </form>
    </ul><br>
    <div>
    </div>
</body>
</html>