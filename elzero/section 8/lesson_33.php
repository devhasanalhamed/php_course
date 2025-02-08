<?php

/*
Control structure
- For loop
 */

$index = 1;

while ($index <= 3) {
    echo "$index";
    echo "<br>";
    $index++;
}

// using : and endwhile statement
$a = 1;
while ($a <= 3) :
    echo "$a";
    echo "<br>";
    $a++;

endwhile;
