<?php
$array = array("a", "b", "a", "c", "b", "d");

echo "Original array: \n";
print_r($array);

$array = array_unique($array);

echo "Modified array: \n";
print_r($array);
?>
