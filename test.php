<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>
    <form action="test.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">

        <label for="password">password:</label>
        <input type="text" name="password" id="password">

        <input type="submit" value="log-in">

    </form>
    <?php
    echo $_POST["username"] . "<br>";
    echo $_POST["password"];

    ?>
</body>

</html>