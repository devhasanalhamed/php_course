<?php

/*
Control structure
- ternary operator => short if
 */

$a = 10;

if ($a == 10) {
    echo "Good";
} else {
    echo "Bad";
}

echo "<br>";

// Condition ? true : false;

echo $a > 10 ? "Good" : "Bad";

echo "<br>";

echo "I Love PHP Because It's A " . (true ? "Good" : "Bad") . " Language";
