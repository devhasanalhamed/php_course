<?php

/*
Operators 
used to perform operations on values.

Part 1

== (Test value equality) Checks if two values are equal
=== (Identical) Checks if two values are equal and of the same type
!= Checks if two values are not equal
<> Checks if two values are not equal
!== Checks if two values are not equal and of the same type
 */


echo "100 == 100: ";
var_dump(100 == 100);
echo "<br>";

echo "\"100\" == 100: ";
var_dump("100" == 100);
echo "<br>";

echo "100.0 == 100: ";
var_dump(100.0 == 100);
echo "<br>";

echo "100.0 != 100: ";
var_dump(100.0 != 100);
echo "<br>";

// <> is the same of !=
echo "100.0 <> \"100\": ";
var_dump(100.0 <> "100");
echo "<br>";

echo "<hr>";

echo "100 === 100: ";
var_dump(100 === 100);
echo "<br>";

echo "\"100\" === 100: ";
var_dump("100" === 100);
echo "<br>";

echo "100.0 === 100: ";
var_dump(100.0 === 100);
echo "<br>";

echo "100.0 !== 100: ";
var_dump(100.0 !== 100);
echo "<br>";
