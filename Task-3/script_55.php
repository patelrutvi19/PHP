<?php
$array = array("a" => "red", "b" => "green", "c" => "blue");

$keys = array_keys($array);
$first_key = $keys[0];
$last_key = end($keys);

echo "First => $first_key \n";
echo "Last => $last_key";
?>