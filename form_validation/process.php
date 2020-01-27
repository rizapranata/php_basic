<?php
    if (!isset($_POST["submit"])) {
        header("Location: form.php");
        die();
    }

    // get form value
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);

    // prepare value for in the constent of back
    $query_name = "name=".urlencode($name);
    $query_email = "email=".urlencode($email);
    $form_value = "&$query_name&$query_email";

    // cek whether "name" was fill or not
    if (empty($name)) {
        $message = urldecode("Name / email must be filled!");
        header("Location: form.php?message={$message}{$form_value}");
    }elseif (strlen($name) <= 3 ) {
        $message = urldecode("Name must be min 4 character!");
        header("Location: form.php?message={$message}{$form_value}");
    }

    // cek whether "password" was filled or not
    if (empty($email)) {
        $message = urldecode("Name / email must be filled!");
        header("Location: form.php?message={$message}{$form_value}");
        die();
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
    <div>
        <ul>
            <li>Name : <?= $_POST["name"]; ?></li>
            <li>email : <?= $_POST["email"]; ?></li>
            <?php if (isset($_POST["belajar"])) : ?>
                <li>Belajar : <?= $_POST["belajar"]; ?></li>
            <?php endif; ?>
        </ul>
    </div>
</body>

</html>