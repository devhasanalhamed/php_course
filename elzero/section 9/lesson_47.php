<?php

/*
Function
- Anonymous function
    - when we create a function we give it a name so we can call it later with that name
    - sometimes we need to create a function for a specific task => this is not against DRY

- Variable inherit from parent scope
- Variable inherit by reference from parent scope
- Anonymous function can be passed to a function
- Anonymous function can be return from a function

Search 
- Closure
 */

//  Normal function
function hello($name)
{
    echo "Hello $name <br>";
}

echo hello("Hasan");

echo "-------------------------------- <br>";

// Anonymous function in variable

$sayHello = function () {
    return "Hello <br>";
};

echo $sayHello();

echo "-------------------------------- <br>";

// Anonymous with parameter in variable

$sayHelloToSomeone = function ($name) {
    return "Hello $name <br>";
};

echo $sayHelloToSomeone("Hasan");

echo "-------------------------------- <br>";


// Inherit variable from parent scope

// message is considered outside the scope of a message
$msg = "Content";

// we could use "use" to pass or inherit the variable
$welcome = function ($name) use ($msg) {
    return $name . " " . $msg . "<br>";
};

echo $welcome("Hasan");

echo "-------------------------------- <br>";


// Pass anonymous function to function => array_map
// in computer science there is something called higher order function which is a function that 
// accepts a function as a callback

$numbers = [10, 20, 30, 40, 50];

// we want to apply the function on the array elements we could use for loop
// or as an alternative we could use callback using array_map function
function plusFive($item)
{
    return $item + 5;
}

// first argument is function name (or anonymous function), second argument is the array
$numbersAfterAddition = array_map("plusFive", $numbers);

echo "<pre>";
print_r($numbersAfterAddition);
echo "</pre>";

// use it direct as an anonymous, best practice if we don't use the function somewhere else
$numbersAfterMultiplication = array_map(function ($item) {
    return $item * 10;
}, $numbersAfterAddition);

echo "<pre>";
print_r($numbersAfterMultiplication);
echo "</pre>";
