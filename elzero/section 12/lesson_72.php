<?php

/*
Math functions

    - sqrt(Number[Required])
        - Return the square root of a number

    - min(Number[Required], Number[Required]) or min(array[required])
        - Return the smaller of two numbers

    - max(Number[Required], Number[Required]) or max(array[required])
        - Return the larger of two numbers
 */

echo sqrt(25) . "<br>";
echo sqrt(9) . "<br>";
echo sqrt(100) . "<br>";

echo "~~~~~~~~~~~~~~~~~~~" . "<br>";

// min could take two or more numbers or an array 
echo min(5, 10, 3, 50, 9) . "<br>";
echo min([1, 2, 3, 4, 5]) . "<br>";

// min also could compare between two arrays, it will compare an element by element between two arrays, once it fine
// the minimum element in that comparison it will return  
echo "<pre>";
print_r(min([1, 3, 8], [1, 5, 1]));
print_r(min([1, 5, 8], [1, 5, 1]));
echo "</pre>";


echo max(5, 10, 3, 50, 9) . "<br>";
echo max([1, 2, 3, 4, 5]) . "<br>";
