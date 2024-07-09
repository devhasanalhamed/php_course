<?php

/*
Array functions
- array_reverse(Array[Required], Boolean[Optional])
    - Reverse an array elements

- array_flip(Array[Required])
    - Exchange keys with its values

- count(Array[Required], Mode[Optional])
    - Count the elements
        - 0 => count the elements of array only
        - 1 => count the elements of multidimensional array

- in_array(needle[Required], haystack[Required], Boolean[Optional])
    - Check if the needle is in the haystack
        - false => needle is not in the haystack
        - true => needle is in the haystack

- array_key_exists(Key[Required], Array[Required])
    - Check if the key exists in the array
        - false => key is not in the array
        - true => key is in the array
 */

$friends = ["Fatima", "Hasan", "Saleh", ["Maha", "Mohammed", "Abeer"]];

// will reserve the elements of the array and recount the keys
// if we want to preserve the index keys we can use the second argument preserve keys
echo "<pre>";
print_r(array_reverse($friends, false));
echo "</pre>";


$countries = ["SA" => "Saudi Arabia", "US" => "United States", "UK" => "United Kingdom"];

// exchange the keys with its values
echo "<pre>";
print_r(array_flip($countries));
echo "</pre>";


// count the elements
$counting = ["A", "A", "B", [1, 2, 3]];

// if the second argument (mode) is 1 it will count the nested arrays
echo "<pre>";
print_r(count($counting, 0));
echo "</pre>";


// check if the needle is in the haystack
// if the argument strict is true it will check the type also
$searchArray = ["1", 2, 3, 4, 5, 6];
var_dump(in_array(1, $searchArray));
echo "<br>";


$courses = ["PHP" => "100$", "HTML" => "80$", "CSS" => "90$"];

if (array_key_exists("PHP", $courses)) {
    echo "PHP is found the price $courses[PHP]" . "<br>";
}
