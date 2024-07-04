<?php

/*
Function 
- variable function
    - php allow to use variable like function
    - when you append parentheses () to variable php will look for function with that name
- function exists
    - function_exists("func name")
 */

function one()
{
    return "One from function <br>";
}

$fun1 = "one";

echo $fun1();

function two(int $num)
{
    return $num . "<br>";
}

$fun2 = "two";

if (function_exists($fun2)) {
    echo $fun2(26);
} else {
    echo "Function not found";
}

// build in function name
$fun3 = "strlen";
echo $fun3("Hello");
