<?php

/*
Array functions

    - array_reduce(Array[Required], Callback[Required], InitialValue[Optional])
        - Reduce an array to a single value
        - Carry => the value of the previous iteration or initial value
        - Item => the value of the current iteration
 */

$numbers = [10, 25, 15, 10, 40];

function sum($carry, $current)
{
    echo "carry: $carry" . "<br>";
    echo "current: $current" . "<br>";
    echo $carry + $current . "<br>";
    echo "~~~~~~~~~~~~~~~~~~~~~ <br>";
    return $carry + $current;
}

echo array_reduce($numbers, "sum") . "<br>";

echo array_reduce($numbers, fn ($p, $c) => min($p, $c), PHP_INT_MAX) . "<br>";
