<?php

$citiesToVisit = array(
    "Paris",
    "Tokyo",
    "New York City",
    "Barcelona",
    "Sydney",
    "London"
);

$citiesToVisit = array_reverse($citiesToVisit);

echo "Cities I want to visit in reverse order:<br>";
foreach ($citiesToVisit as $city) {
    echo "- $city<br>";
}

?>
