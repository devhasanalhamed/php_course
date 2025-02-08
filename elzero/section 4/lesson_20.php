<?php

/*
Operators
used to perform operations on values.

Incrementing and Decrementing operators 
increase and decrease values
 */

$likes = 0;
$likes++;
$likes++;
$likes++;
$likes++;
echo $likes; // 4
echo "<br>";

echo "<hr>";

// pre increment and post increment

$a = 0;

echo $a++; // 0
echo "<br>";
echo $a; // 1
echo "<br>";

echo "<hr>";

$b = 2;
echo --$b;
echo "<br>";
echo $b;
echo "<br>";
