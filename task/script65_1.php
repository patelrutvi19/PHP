<?php

for ($i = 1; $i <= 4; $i++) {
    // Print leading spaces
    for ($j = $i; $j < 4; $j++) {
        echo " ";
    }

    // Print asterisks
    for ($k = 1; $k < $i * 2; $k++) {
        echo "*";
    }
    echo "</br>";
    // Move to the next line
    echo PHP_EOL;
}

?>