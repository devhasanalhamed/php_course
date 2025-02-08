<?php

/*
Array functions

- array_keys(Array[Required], Search[Optional])
    - return the keys of an array in a new array
    - type
        false => no checking for type
        true => check for type

- array_values(Array[Required])
    - return the values of an array in a new array

- array_pad(Array[Required], Size[Required], Value[Optional])
    - pad array to the specified length with a value
    - negative value add elements before original items
    - if size < array length, nothing will be deleted

- array_product(Array[Required])
    - calculate the product of values in an array => return int || float
    - in mathematics, a product is the result of multiplication

- array_sum(Array[Required])
    - calculate the sum of values in an array
 */

$friends = ["Fatima", "Hasan", "Saleh", ["Maha", "Mohammed", "Abeer"], "Hasan"];

echo "<pre>";
print_r(array_keys($friends));
echo "</pre>";

// we can define a value to return the indexes of an element
// if argument strict is true it will check the type also
echo "<pre>";
print_r(array_keys($friends, "Hasan", true));
echo "</pre>";

$countries = ["SA" => "Saudi Arabia", "US" => "United States", "UK" => "United Kingdom"];
// return values of an array to a list
echo "<pre>";
print_r(array_values($countries));
echo "</pre>";


// array pad to fill an array
// if the size is negative it will add before the elements of an array
// if the size is smaller than the array length nothing will be deleted
echo "<pre>";
print_r(array_pad($friends, 10, "Hasan"));
echo "</pre>";



// array product, product in math is the result of all multiplication
// it will convert an element if it can be convert to number and if not it will return the result of zero
$product = array("10", 5, 2);
echo  "<pre>";
print_r(array_product($product));
echo "</pre>";


// array sum will return the summation of an array
// if there is an element can't be converted to number it will be ignored
$sum = [10, 12, 0.5, 1.5, 6];
echo "<pre>";
print_r(array_sum($sum));
echo "</pre>";
