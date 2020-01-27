<?php
    if (isset($_POST["submit"])) {
        $book = htmlentities(strip_tags(trim($_POST["book"])));
        $quantity = htmlentities(strip_tags(trim($_POST["quantity"])));
        $price = htmlentities(strip_tags(trim($_POST["price"])));

        $error = "";

        $array_book = ["html", "css","php"];
        $book = strtolower($book);

        if (!in_array($book, $array_book)) {
            $error = "Book not available";
        }

        if (empty($book)) {
            $error = "Please input book type!";
        } elseif (empty($quantity)) {
            $error = "Please input book Quantity!";
        } elseif (empty($price)) {
            $error = "Please input book price!";
        }

        // quantity must be numeric
        if (!is_numeric($quantity)) {
            $error = "Quantity must in as number";
        } elseif ($quantity != round($quantity)) {
            // quantity >= 1 and <= 10
            $error = "Quantity must the round number";
        }

        // the cost of send
        if (!is_numeric($price) OR ($price < 5000) OR (($price % 1000) != 0)) {
            $error = "const the sent must be multiple 1000 (min IDR 5000)";
        }

        // if error not exist
        if ($error === "") {
            echo "<h4>Form result in Proccess</h4> <br>";
            echo "Book Title : $book <br>";
            echo "Quantity : $quantity <br>";
            echo "Cost the Send : $price <br>";
        }
    } else {
        $error = "";
        $book = "";
        $quantity = "";
        $price = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku</title>
</head>
<body>
    <h2>Booking Book</h2>
    <ul>
        <?php if (!$error == "") : ?>
           <p style="color: red; font-style: italic"><?= $error; ?></p>
        <?php endif; ?><br>
        <form action="book.php" method="POST">
            <li>Book Title : <input type="text" name="book" value="<?= $book; ?>"></li><br>
            <li>Quantity : <input type="text" name="quantity" value="<?= $quantity; ?>"></li><br>
            <li>Price : <input type="text" name="price" value="<?= $price; ?>"></li><br>
            <input type="submit" name="submit" value="Process">
        </form>
    </ul>
</body>
</html>