<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="home1.php" method="post">
        <input type="submit" value="logout" name="logout">
    </form>
</body>

</html>
<?php

if (isset($_POST["logout"])) {
    session_destroy();
    header('location: index1.php');
}
echo "<br>" . $_SESSION["username"] . " " . $_SESSION["password"];
?>