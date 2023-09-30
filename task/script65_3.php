<?php

for ($i = 4; $i >= 1; $i--) {
    // Print leading spaces
    for ($j = $i; $j < 4; $j++) {
        echo " ";
    }

    // Print asterisks
    for ($k = $i * 2; $k > 1; $k--) {
        echo "*";
    }
    echo "</br>";

    // Move to the next line
    echo PHP_EOL;
}

?>
