<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remember Me Example</title>
</head>

<body>
    <form method="POST" action="">
        <label for="uname">Username:</label>
        <input type="text" id="uname" name="uname" value="<?php echo isset($_COOKIE['uname']) ? $_COOKIE['uname'] : ''; ?>" required><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?php echo isset($_COOKIE['age']) ? $_COOKIE['age'] : ''; ?>" required><br>

        <input type="checkbox" id="remember" name="remember" <?php echo isset($_COOKIE['uname']) ? 'checked' : ''; ?>>
        <label for="remember">Remember Details</label><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname = $_POST['uname'];
        $age = $_POST['age'];

        if (isset($_POST['remember'])) {
            // Set cookies for 30 days
            setcookie('uname', $uname, time() + (30 * 24 * 60 * 60));
            setcookie('age', $age, time() + (30 * 24 * 60 * 60));
            echo "Cookies are set.<br>";
        } else {
            // Unset cookies if "Remember Details" is not checked
            setcookie('uname', '', time() - 3600);
            setcookie('age', '', time() - 3600);
            echo "Cookies are not set.<br>";
        }

        echo "Username: " . ($uname) . "<br>";
        echo "Age: " . ($age) . "<br>";
    } elseif (isset($_COOKIE['uname']) && isset($_COOKIE['age'])) {
        // Display stored credentials from cookies
        echo "Stored Username: " . ($_COOKIE['uname']) . "<br>";
        echo "Stored Age: " . ($_COOKIE['age']) . "<br>";
    }
    ?>
</body>

</html>