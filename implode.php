<?php
echo "<h2>Demonstration of PHP Functions: explode(), implode(), compact(), extract()</h2>";

// explode() function
$string = "apple,banana,cherry";
$arrayFromString = explode(",", $string);
echo "<strong>explode()</strong><br>";
echo "Original string: $string<br>";
echo "Array from string: ";
print_r($arrayFromString);
echo "<br><br>";

// implode() function
$array = ["red", "green", "blue"];
$stringFromArray = implode("-", $array);
echo "<strong>implode()</strong><br>";
echo "Original array: ";
print_r($array);
echo "<br>";
echo "String from array: $stringFromArray<br><br>";

// compact() function
$name = "John Doe";
$age = 30;
$city = "New York";
$compactArray = compact("name", "age", "city");
echo "<strong>compact()</strong><br>";
echo "Variables: name = $name, age = $age, city = $city<br>";
echo "Array from variables: ";
print_r($compactArray);
echo "<br><br>";

// extract() function
$extractedArray = ["firstName" => "Jane", "lastName" => "Smith", "age" => 25];
echo "<strong>extract()</strong><br>";
echo "Array to extract: ";
print_r($extractedArray);
echo "<br>";
extract($extractedArray);
echo "Extracted variables: firstName = $firstName, lastName = $lastName, age = $age<br>";
