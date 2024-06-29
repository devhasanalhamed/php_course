<?php

/*
Operators 
used to perform operations on values

String operators
- Concatenate strings 
 */

$a = "Hasan";
$b = "Mohammed";
$c = "Al-Hamed";

define("WEB", "Full Stack Developer");


echo "$a $b $c";
echo "<br>";
echo "{$a} {$b} {$c}";
echo "<br>";
// (.) used to concatenate strings, it's very important to mix string with functions and constants
echo $a . $b . $c;
echo "<br>";
echo $a . " " . $b . " " . $c;
echo "<br>";
echo "{$a} {$b} {$c} " . WEB . " " . unicorn();
echo "<br>";

function unicorn()
{
    return "UNICORN 🦄";
}

// using dot equal to reassign the old value to the new one.
$x = "Hasan "; // Hasan
$x .= "Mohammed "; // Hassan Mohammed
$x .= "Al-Hammed"; // Hasan Mohammed Al-Hamed
$x .= " For Business."; // Hasan Mohammed Al-Hamed For Business.

echo "$x";
echo "<br>";
