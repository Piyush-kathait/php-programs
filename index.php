<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection was successful\n";

$sql = "CREATE TABLE `first` (`name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL ,
                              `age` INT(50) NOT NULL , `gender` VARCHAR(255) NOT NULL );";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "success\n";
} else {
    echo "Error: " . mysqli_error($conn);
}


// // Create database
// $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully or already exists\n";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }
