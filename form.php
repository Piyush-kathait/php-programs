<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for="uname">Username:</label>
        <input type="text" id="uname" name="uname">
        <label for="age">age:</label>
        <input type="number" id="age" name="age">
        <input type="submit" value="enter">
    </form>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $conn = mysqli_connect("localhost", "root", "", "exam");
    if (!$conn) echo mysqli_connect_error($conn);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {+
        $name = $_POST['uname'];
        $age = $_POST['age'];
        $sql = "insert into Student(name,age) values(?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $name, $age);
        if ($stmt->execute()) echo "succ";
        else echo "nosuc";
    }
    ?>
</body>

</html>