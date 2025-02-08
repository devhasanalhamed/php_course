<?php

/*
Array functions

- array_slice(Array[Required], Start[Required], Length[Optional])
    - return a subset of an array
    Start
        - index of the first element
    Length
        - negative => stop slicing until this index
        - if the length is not specified, it will return all elements from the start
    Preserve keys
        false => default => reset keys
        true => keep keys
    if array have string keys, it will always preserve the keys


- array_splice(Array[Required], Start[Required], Length[Optional])
    - remove elements from an array
    Start
        - index of the first element
    Length
        - negative => stop slicing until this index
        - if the length is not specified, it will return all elements from the start
    
 */

$chars = ["A", "B", "C", "D", "E", "F"];
$array_with_string_keys = ["A" => 1, "B" => 2, "C" => 3];
$array_with_numeric_keys = [10 => "A", 20 => "B", 30 => "C"];

// first argument is the list, the second is the index to start from, the third one is the length
// if the length is negative it will stop slicing until this index
echo "<pre>";
print_r(array_slice($chars, 2, 2));
echo "</pre>";

echo "<pre>";
print_r(array_slice($chars, 2, -1));
echo "</pre>";

echo "<pre>";
print_r(array_slice($array_with_string_keys, 0, 2));
echo "</pre>";

echo "<pre>";
print_r(array_slice($array_with_numeric_keys, 0, 2, true));
echo "</pre>";

// array slicing will not effect the original array
echo "<pre>";
print_r($chars);
echo "</pre>";




// array splice will effect the original array
$numbers = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

// also array splice have argument replacement which allow you to add elements to the array in the start index we specify 
echo "<pre>";
print_r(array_splice($numbers, 0, 3, ["Thirty", "Forty", "Fifty", "FiftyOne"]));
echo "</pre>";

echo "<pre>";
print_r($numbers);
echo "</pre>";
