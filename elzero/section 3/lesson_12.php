<?php

/* 
    Assign variable by reference
    - by default, variables are always assigned by value
    - assigned by reference make variable alias or point to another

    Search 
    - references are not pointers
*/

$a = "Hasan";
$b = $a;
$b = "Hamed";

echo $a;
echo "<br>";
echo $b;

// c will refer to the value of a by assign '&' before the variable
// change in any will change in both
$c = &$a;
$c = "Al-Hamed";
echo "<br>";
echo $c;
echo "<br>";
echo $a;

// 17