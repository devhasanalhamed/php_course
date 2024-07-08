<?php

/*
String functions
- lcfirst(String[required])
- ucfirst(String[required])
- strtolower(String[required])
- strtoupper(String[required])
- ucwords(String[required], Delimiters[optional])
- str_repeat(String[required], Count[required])
 */

// only provide the first letter of the whole string
echo lcfirst("Hasan") . "<br>";
echo ucfirst("hasan") . "<br>";

// all letters effected
echo strtoupper("hasan") . "<br>";
echo strtolower("HASAN") . "<br>";

// every word in the string
echo ucwords("hasan al-hamed") . "<br>";

// we can edit the delimiter (where the function will cut, by default is space)
echo ucwords("hasan al-hamed", "-") . "<br>";

// repeat string for a given number
echo str_repeat("HA", 15) . "<br>";
