<?php

for ($i = 1; $i <= 7; $i++) {
    // Print leading spaces
    for ($j = 7; $j >= $i; $j--) {
        echo " ";
    }

    // Print numbers in ascending order
    for ($k = 1; $k <= $i; $k++) {
        echo $k;
    }

    // Print numbers in descending order
    for ($m = 1; $m < $i; $m++) {
        echo --$k;
    }
    echo "</br>";

    echo PHP_EOL;
}

?>