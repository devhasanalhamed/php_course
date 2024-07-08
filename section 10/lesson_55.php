<?php

/*
String function
 - str_replace(Find String[Required], Replace With[Required], Data[Required])
    - Its a case sensitive function
- str_ireplace(Find String[Required], Replace With[Required], Data[Required])
 */

// this function is similar to strtr function, also provide the number of replacements
// as an optional variable
echo str_replace("@", "o", "Hell@ W@rld!", $r) . "<br>";
echo "Number of replacement: $r" . "<br>";

// multiple characters
echo str_replace(["@", "#"], ["H", "o"], "@ell# W#rld!", $r) . "<br>";

// not only str_replace for string but also can be used with arrays
// and by adding str_ireplace is the same but case insensitive
echo "<pre>";
print_r(str_ireplace(["@", "#", "one"], ["H", "o", 1], ["@ell# W#rld!", "One", "Two", "@at", "Once upon a time"]));
echo "</pre>";
