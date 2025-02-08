<?php

/*
Math functions

    - round(Number[Required], Number(Precision)[Optional], Mode[Optional])
        - round to the nearest integer
        - Mode
            PHP_ROUND_HALF_UP (default)
            PHP_ROUND_HALF_DOWN
            PHP_ROUND_HALF_EVEN
            PHP_ROUND_HALF_ODD

- ceil, floor, round => return double
 */

echo round(3.2) . "<br>";
echo round(3.5) . "<br>";
echo round(3.6) . "<br>";

echo "~~~~~~~~~~~~~~~~~~~" . "<br>";

echo round(8.23, 1) . "<br>"; // 8.2
echo round(8.55, 1) . "<br>"; // 8.6
echo round(8.995, 2) . "<br>"; // 9.0

echo "~~~~~~~~~~~~~~~~~~~" . "<br>";

echo round(9.51, 0, PHP_ROUND_HALF_DOWN) . "<br>";
echo round(9.50, mode: PHP_ROUND_HALF_DOWN) . "<br>";
echo round(9.9, mode: PHP_ROUND_HALF_DOWN) . "<br>";
echo round(9.2, mode: PHP_ROUND_HALF_DOWN) . "<br>";

echo "~~~~~~~~~~~~~~~~~~~" . "<br>";

echo round(1.5, 0,  PHP_ROUND_HALF_EVEN) . "<br>";
echo round(2.5, 0, PHP_ROUND_HALF_EVEN) . "<br>";
echo round(9.5, 0,  PHP_ROUND_HALF_EVEN) . "<br>";
echo round(10.5, 0, PHP_ROUND_HALF_EVEN) . "<br>";
echo round(9.4, 0,  PHP_ROUND_HALF_EVEN) . "<br>";
echo round(10.4, 0, PHP_ROUND_HALF_EVEN) . "<br>";

echo round(2.5, mode: PHP_ROUND_HALF_ODD) . "<br>";
echo round(1.5, mode: PHP_ROUND_HALF_ODD) . "<br>";
