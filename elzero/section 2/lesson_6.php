<?php

/*
Data Types 
Boolean + converting to boolean
*/

// using var_dump to convert, no need for echo it's dynamically print
// var_dump give us detailed information
var_dump((bool) ""); // Any empty data gives false
echo "<br>";
var_dump((bool) "0"); // String of "0" gives false
echo "<br>";
var_dump((bool) array()); // Empty array
echo "<br>";
var_dump((bool) []); // Empty array
echo "<br>";
var_dump((bool) "1"); // String with any data except string or null will give true
echo "<br>";
var_dump((bool) " "); // true
echo "<br>";
var_dump((bool) [1, 2, 5]); // true
echo "<br>";
var_dump((bool) -105); //true
echo "<br>";
var_dump((bool) 10.5); //true
echo "<br>";
