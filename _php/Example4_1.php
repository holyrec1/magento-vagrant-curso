<?php

$path = "/Users/armandoarce/Sites/php/data.txt";
if (!file_exists($path))
    exit("File not found");
$file = fopen($path, "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line;
    }
    if (!feof($file)) {
        echo "Error: EOF not found\n";
    }
    fclose($file);
}

?>