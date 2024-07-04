<?php

/*
Function
- Variable arguments list
    - func_num_args(): number of arguments
    - func_get_arg(index): fetch an argument by index
    - func_get_args(): return array of all arguments
 */
// like spread syntax (operator) in javascript

function sum()
{
    echo "Number of arguments: " . func_num_args() . "<br>";
    echo "Argument at index 2: " . func_get_arg(2) . "<br>";
    echo "<pre>";
    print_r(func_get_args());
    echo "</pre>";
    $result = 0;
    foreach (func_get_args() as $number) {
        $result += $number;
    }
    return "Summation total: $result <br>";
}

echo sum(10, 20, 30, 60, 80, 310, 590);

// Alternative method using spread operator

function sum2(...$numbers)
{
    echo "Number of arguments: " . count($numbers) . "<br>";
    echo "Argument at index 2: " . $numbers[2] . "<br>";
    $result = 0;
    foreach ($numbers as $number) {
        $result += $number;
    }
    return "Summation total: $result <br>";
}

echo sum2(10, 20, 30, 60, 80, 310, 590);
