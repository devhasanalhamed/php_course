<?php

/*
Operators
used to perform operations on values.

Logical Operators
compare conditions

and => two conditions must be true
or => one condition must be true
xor => one condition must be true but not both

&& => two conditions must be true [has a greater precedence than and]
|| => one condition must be true [has a greater precedence than or]
! => reverse the result

 */

var_dump(100 > 50 and 100 > 80 and 100 > 90);
echo "<br>";
var_dump(100 > 50 and 100 < 80 and 100 > 90);
echo "<br>";
var_dump(100 > 50 && 100 > 80 && 100 > 90);
echo "<br>";
var_dump(100 > 10 or 100 > 200 or 100 > 300);
echo "<br>";
var_dump(100 > 10 || 100 > 200 || 100 > 300);
echo "<br>";
var_dump(!false);
echo "<br>";
var_dump(10 > 20 xor 20 > 5);
echo "<br>";
var_dump(10 > 20 xor 20 < 5);
echo "<br>";
