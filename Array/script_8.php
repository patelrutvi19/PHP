<?php

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo "The original array is: ";
print_r($array);
echo "\n";
$number = 5;

$key = array_search($number, $array);

unset($array[$key]);

$array = array_values($array);
echo "The updated array is: ";
print_r($array);
echo "\n";
?>

