<?php

$cities = array("New York", "London", "Paris", "Tokyo", "Delhi");

$city_to_remove = "London";

$key = array_search($city_to_remove, $cities);

array_splice($cities, $key, 1);

echo "The updated list of cities is: \n";
foreach ($cities as $city) {
  echo "$city\n";
}
?>
