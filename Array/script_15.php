<?php

$movies = array(
    array(
        "title" => "RRR",
        "director" => "S.S. Rajamouli",
        "release_year" => 2022
    ),
    array(
        "title" => "Ganapat",
        "director" => "Vikas Bahl",
        "release_year" => 2023
    )
);

$movieIndex = 0; 
$movie = $movies[$movieIndex];

echo "Title: " . $movie["title"] . "<br>";
echo "Director: " . $movie["director"] . "<br>";
echo "Release Year: " . $movie["release_year"] . "<br>";


?>