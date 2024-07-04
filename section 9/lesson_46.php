<?php

/*
Function
- passing arguments by reference
    - by default, function arguments ar passed by value
    - if the value of the argument inside the function changed it will not change outside
    - to change it outside pass the argument by reference

- return type declarations

Search 
- php strict mode
 */

// passing argument by reference
function plusFive(&$number)
{
    $number += 5;
    return $number;
}

$a = 5;

echo plusFive($a) . "<br>";

echo $a . "<br>";

// define the return type of a function to return integer
// Note: it will cast the result, sometimes it may cause errors
function calculate($number1,  $number2): int
{
    return $number1 + $number2;
}

echo calculate(10.5, 9.5) . "<br>";
echo gettype(calculate(10.5, 9.5));
