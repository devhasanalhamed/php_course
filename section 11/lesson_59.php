<?php

/*
Array functions
- array_chunk(Array[Required], Length[Required], Preserve_Keys[Optional])
    - Split an array into chunks [return a multidimensional indexed array]
    - preserve_key
        - false [default]=> reindex the kays
        - true => keep the keys
- array_change_key_case(Array[Required], Case[Optional])
    - Change the case of the keys
        - CASE_LOWER [default] change the keys to lowercase => "ABC" => "abc"
        - CASE_UPPER change the keys to uppercase => "abc" => "ABC"
- array_combine(Array[Required], Array[Required])
    - Combine two arrays
- array_count_values(Array[Required])
    - Count the values
 */

$friends = ["Fatima", "Hasan", "Saleh", ["Maha", "Mohammed", "Abeer"]];

// array chunk return a segments of array
echo "<pre>";
print_r(array_chunk($friends, 2));
echo "</pre>";

$countries = ["SA" => "Saudi Arabia", "US" => "United States", "UK" => "United Kingdom"];

// we can turn the preserve kays to not reindex them
echo "<pre>";
print_r(array_chunk($countries, 2, true));
echo "</pre>";

// change case by default if to lowercase
echo "<pre>";
print_r(array_change_key_case($countries, CASE_UPPER));
echo "</pre>";

// array combine two arrays one with kays and the other with values
$keys = ["H", "S", "A"];
$values = ["Hasan", "Saleh", "Abdulrahman"];

// first arguments are kays and the second are values, the length must be equal
echo "<pre>";
print_r(array_combine($keys, $values));
echo "</pre>";

// array count values is very powerful it can count the element of an array the how many times it appears
$counting = ["A", "A", "B", "C", "B", "D"];

echo "<pre>";
print_r(array_count_values($counting));
echo "</pre>";
