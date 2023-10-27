<?php

$citiesToVisit = array(
    "Paris",
    "Tokyo",
    "New York City",
    "Barcelona",
    "Sydney",
    "London"
);
sort($citiesToVisit);

echo "Cities I want to visit in alphabetical order:<br>";
foreach ($citiesToVisit as $city) {
    echo "- $city<br>";
}

?>
