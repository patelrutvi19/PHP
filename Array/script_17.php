<?php

    $citiesToVisit = array(
       "Paris",
       "Tokyo",
       "New York City",
       "Barcelona",
       "Sydney"
);

    $citiesToVisit[] = "London"; 

    echo "Cities I want to visit in the future:<br>";
    foreach ($citiesToVisit as $city) {
        echo "- $city<br>";
}

?>
