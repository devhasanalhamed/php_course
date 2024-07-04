<?php

/*
Function
- Arrow function
    - short syntax for anonymous function
    - automatic use variables from parent scope

Syntax
- function replaces with fn
- no need for curly braces
- return is omitted
 */

//  In the previous example file...


// Anonymous function in variable

$sayHello = fn () => "Hello <br>";

echo $sayHello();

echo "-------------------------------- <br>";

// Anonymous with parameter in variable

$sayHelloToSomeone = fn ($name) => "Hello $name <br>";

echo $sayHelloToSomeone("Hasan");

echo "-------------------------------- <br>";


// Inherit variable from parent scope, in anonymous function variables are automatically inherited 
$msg = "Content";
$welcome = fn ($name)   => $name . " " . $msg . "<br>";

echo $welcome("Hasan");

echo "-------------------------------- <br>";



$numbers = [10, 20, 30, 40, 50];

$numbersAfterAddition = array_map(fn ($item) => $item + 5, $numbers);

echo "<pre>";
print_r($numbersAfterAddition);
echo "</pre>";
