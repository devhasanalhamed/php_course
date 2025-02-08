<?php

/*
String function
- substr_replace(String[Required], Replace With[Required], Start[Required], Length[Optional])
 - positive number => length of string to be replaced
 - negative number => character left at the end after replacement
 - 0 => insert instead of replace
 */


echo substr_replace("Hasan", 1, 2) . "<br>";

echo substr_replace("Hasan", 1, -1) . "<br>";

// length is the the number of characters to be replaced
echo substr_replace("Hasan", 1, 2, 1) . "<br>";

// negative numbers in length will bring the string from the last characters and will add it after 
// the replacement
echo substr_replace("Hasan Code School", "Q", 11, -3) . "<br>";
// if the negative number is coming back before the cutting will add it normally all the characters before

// also we can use substr_replace to insert instead of replace
// by using 0 as an argument for the length
echo substr_replace("Hasan", "Q", 5, 0) . "<br>";

// for array il will effect the elements not the array by it self
echo "<pre>";
print_r(substr_replace(["Hasan", "Fatima"], 1, 2));
echo "</pre>";
