<?php
echo "<h2>Demonstration of PHP Variable Functions</h2>";

// Example variable
$variable = 42;

// gettype() function
echo "<strong>gettype()</strong><br>";
echo "The type of \$variable is: " . gettype($variable) . "<br><br>";

// settype() function
echo "<strong>settype()</strong><br>";
settype($variable, "string");
echo "After using settype() to convert \$variable to string, its type is: " . gettype($variable) . " and value is: $variable<br><br>";

// isset() function
echo "<strong>isset()</strong><br>";
if (isset($variable)) {
    echo "\$variable is set.<br>";
} else {
    echo "\$variable is not set.<br>";
}

// Unset the variable
unset($variable);

// isset() after unset() function
if (isset($variable)) {
    echo "\$variable is still set.<br>";
} else {
    echo "\$variable is now unset.<br>";
}

echo "<br><strong>unset()</strong><br>";
echo "The \$variable has been unset. Attempting to access it will result in an undefined variable notice (if error reporting is enabled).";

// Demonstrating unset with an array element
$array = array("a" => 1, "b" => 2, "c" => 3);
echo "<br><br><strong>Before unset()</strong><br>";
print_r($array);

unset($array['b']);
echo "<br><br><strong>After unsetting \$array['b']</strong><br>";
print_r($array);

?>
