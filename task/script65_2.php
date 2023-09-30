<?php
function print_pattern($num) {
    // Outer loop handles number of rows
    for ($i = 0; $i < $num; $i++) {
        // Inner loop handles number of columns
        for($j = 0; $j <= $i; $j++ ) {
            // Print stars
            echo "* ";
        }
        // Go to new line after each row pattern is printed
        echo "<br/>";
    }
}

// Call function and send number of lines as parameter
$num = 4;
print_pattern($num);
?>