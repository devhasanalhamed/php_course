<?php

/*
Array functions

- array_merge(Array[Required], Array[Required])
    - Merge two or more arrays and return new array
        - The first array will be the base
        - latter array key with the same name overwrite the value of the previous one
        - numeric key will be reindexed

- array_replace(Array[Required], Array Replacement/s[Required])
    - Replace the values of an array with the values from one or more arrays
        - The first array will be the base
        - latter array key with the same name overwrite the value of the previous one
        - if key in the second array not found in first array it will be created

- array_rand(Array[Required], Length[Optional])
    - Return a random key or an array of random keys
        - if the length is not specified, the function will return a single random key  

- shuffle(Array[Required])
    - Shuffle the array
 */

// if the array keys are strings the matching keys will be overwritten
$courses_advanced = ["One" => "Php", "Two" => "Dart", "Three" => "Laravel", "Four" => "Javascript"];

$coursed_basics = ["One" =>  "C++", "Two" => "Java", "Five" =>  "C#"];

echo "<pre>";
print_r(array_merge($courses_advanced, $coursed_basics));
echo "</pre>";

// if the array keys are numbers they will be reindexed
$contacts_one = [10 => "Hasan", 20 =>  "Saleh", 30 => "Abdulrahman"];

$contacts_two = ["10" => "Mohammed", 50 => "Abeer", 60 => "Hashim"];

echo "<pre>";
print_r(array_merge($contacts_one, $contacts_two));
echo "</pre>";


// in array replace if the keys are strings it will do the same of array merge
echo "<pre>";
print_r(array_replace($courses_advanced, $coursed_basics));
echo "</pre>";


// in array replace if the keys are numbers it will keep their values and if there are similar keys they will be overwritten
echo "<pre>";
print_r(array_replace($contacts_one, $contacts_two));
echo "</pre>";


echo "<pre>";
print_r(array_rand($courses_advanced, 2));
echo "</pre>";

echo $coursed_basics[array_rand($coursed_basics)] . "<br>";


shuffle($courses_advanced);

echo "<pre>";
print_r($courses_advanced);
echo "</pre>";
