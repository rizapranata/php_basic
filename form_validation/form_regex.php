<?php
if (isset($_POST["submit"])) {

    // get form value
    $name = htmlentities(strip_tags(trim($_POST["name"])));
    $email = htmlentities(strip_tags(trim($_POST["email"])));
    $website = htmlentities(strip_tags(trim($_POST["website"])));

    // error store
    $error_message = "";

    // check whether "name" has fill or empty
    if (empty($name)) {
        $error_message = "Name must fill <br>";
    }
    //check whether "email" has fill or empty
    if (empty($email)) {
        $error_message = "Email must fill <br>";
    }
    //check email must match with this format
    elseif (!preg_match("/.+@.+\..+/", $email)) {
        $error_message = "Format email not match <br>";
    }
    //check website must match with this format
    if (empty($website) and !preg_match("/.+..+/", $website)) {
        $error_message = "Format website not match ";
    }

    if ($error_message === "") {
        echo "Form success in the process <br>";
        echo "Name : $name <br>";
        echo "Email : $email <br>";
        echo "Website : $website <br>";
    }
} else {
    $error_message = "";
    $name = "";
    $email = "";
    $website = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foem Regex</title>
</head>

<body>
    <ul>
        <h2>Validation Form</h2>
        <p style="color: red; font-style: italic">
            <?= $error_message; ?>
        </p>
            <form action="form_regex.php" method="POST">
                <li>Name :<input type="text" name="name" value="<?= $name; ?>"></li><br>
                <li>Eemail :<input type="email" name="email" value="<?= $email; ?>"></li><br>
                <li>Website : <input type="text" name="website" value="<?= $website; ?>"></li><br>
                <li><input type="submit" name="submit" value="Submit"></li>
            </form>
    </ul><br>
    <div>
    </div>
</body>

</html>