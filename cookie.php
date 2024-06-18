<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>
    <form action="test.php" method="post">
        <label for="pizza">Pizzass</label>
        <input type="number" name="pizza" id="pizza">
        <input type="submit" value="ORDER">


    </form>
    <?php
    setcookie("fav_food", "mangoshake", time() - 1, "/");
    setcookie("fav_desert", "Ice_Cream", time() + 86400 * 2, "/");
    setcookie("fav_fruit", "mango", time() + 86400 * 2, "/");
    foreach ($_COOKIE as $key => $value) {
        echo " {$key} - {$value} <br>";
    }

    if (isset($_COOKIE["fav_food"])) {
        echo "is this your {$_COOKIE["fav_food"]}!!!";
    } else {
        echo ' there is no favourite food??';
    }
    ?>
</body>

</html>