<?php

/*
Operators 
used to perform operations on values.

Operator precedence
|| Has a greater precedence than "or"
&& Has a greater precedence than "and"
! Has a greater precedence than "not"
() Has a greater precedence than "or", "and", "not"
* / % has a greater precedence than "+", "-"

 */

echo 2 + 4 * 5; // 22
// why not 30? * / has higher precedence than + -
// even if you put them in the different order, it will still work
echo '<br>';
// isolate values with parentheses to separate summation and multiplication
echo (2 + 4) * 5; // 30
echo '<br>';
// will return true, considered as a real logical comparison
var_dump(10 || false); // 1
echo '<br>';
var_dump("0" || false || "" || 0);
echo "<br>";


$a = 10 or false;
echo $a; // 10
// why 10 not 1 like || symbol do?
// the reason behind that is precedence of pipe or is greater even than 
// assign operator
// a = 3 || true => (3 || true) then assign 
// a 3 or true => assign 3 or true  
echo "<br>";
