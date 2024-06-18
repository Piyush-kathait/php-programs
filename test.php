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
    $total = null;
    $quantity = $_POST["pizza"];
    $cost = 2.99;
    $total = $quantity * $cost;
    echo "nigga you wanna eat {$quantity} pizzas???";
    echo "<br> so your total cost will be \${$total}";
    ?>
</body>

</html>