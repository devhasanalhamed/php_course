<?php

/*
Operators
used to perform operations on values

Comparison Operators
used to compare two values

Part 2
Logical Operators  
 > Larger than 
 < Smaller than
 >= Larger than or equal to
 <= Smaller than or equal to
 <=> Spaceship operator [Less: -1, Equal: 0, Greater: 1]

 Search 
 How does php compare strings with comparison operators
 */

echo "100 > 50: ";
var_dump(100 > 50);
echo "<br>";
echo "100 > 100: ";
var_dump(100 > 100);
echo "<br>";
echo "100 >= 100: ";
var_dump(100 >= 100);
echo "<br>";
echo "100 < 50: ";
var_dump(100 < 50);
echo "<br>";
echo "100 <= 50: ";
var_dump(100 <= 50);
echo "<br>";
echo "100 <=> 50: ";
var_dump(100 <=> 50); // -1
echo "<br>";
echo "100 <=> 100: ";
var_dump(100 <=> 100); // 0
echo "<br>";
echo "100 <=> 200: ";
var_dump(100 <=> 200); // 1
echo "<br>";
