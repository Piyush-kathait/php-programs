<?php
$sourceFile = 'source.txt'; // The file to copy from
$destinationFile = 'destination.txt'; // The file to copy to

if (!file_exists($sourceFile)) {
    die("Source file does not exist.");
}

if (copy($sourceFile, $destinationFile)) {
    echo "File copied successfully.";
} else {
    echo "Failed to copy file.";
}
?>
