<?php

/*
Array functions

- sort(Array[Required], Flags[Optional])
    - sort an array indexed array in ascending order

- rsort(Array[Required], Flags[Optional])
    - sort an array indexed array in descending order

- asort(Array[Required], Flags[Optional])
    - sort an array associative array in ascending order

- arsort(Array[Required], Flags[Optional])
    - sort an array associative array in descending order

- ksort(Array[Required], Flags[Optional])
    - sort an array associative array in ascending order

- krsort(Array[Required], Flags[Optional])
    - sort an array associative array in descending order

- natural_sort(Array[Required], Flags[Optional])
    - sort an array indexed array in ascending order in human readable way => 10.png 20.png 100.png


- Flags
    - SORT_REGULAR
    - SORT_NUMERIC
    - SORT_STRING
    - SORT_DESC
    - SORT_ASC
    - SORT_NATURAL
    - SORT_NATURAL | SORT_FLAG_CASE

Practice
- Flags
- Custom sorting function
 */

$names = ["Fatima", "Hasan", "Saleh", "Maha", "Mohammed", "Abeer"];

$countries = ["SA" => "Saudi Arabia", "UAE" => "United Arab Emirates", "SY" => "Syria", "YE" => "Yemen", "AL" => "Algeria"];

$country_codes = ["966" => "SA", "971" => "UAE", "963" => "Syria", "967" => "Yemen", "213" => "Algeria"];

$photos = ["photo10.png", "photo200.png", "photo30.png"];

// sort function to use with indexed array with ascending order
sort($names);


echo "<pre>";
print_r($names);
echo "</pre>";

// sort in descending order
rsort($names);


echo "<pre>";
print_r($names);
echo "</pre>";

// to sort associative array depending on values by ascending order
asort($countries);


echo "<pre>";
print_r($countries);
echo "</pre>";

// to sort associative array depending on values by descending order
arsort($countries);

echo "<pre>";
print_r($countries);
echo "</pre>";


// sorting an associative array depending on the keys in ascending order
ksort($country_codes);

echo "<pre>";
print_r($country_codes);
echo "</pre>";


// sorting an indexed array in matter of human readable order
natsort($photos);

echo "<pre>";
print_r($photos);
echo "</pre>";
