<?php
$array = array("red", "green", "blue", "yellow", "orange");

$element = "blue";

$index = array_search($element, $array);

if ($index !== false) {
    echo "The element '$element' is found at index $index.";
} else {
    echo "The element '$element' is not found in the array.";
}
?>
