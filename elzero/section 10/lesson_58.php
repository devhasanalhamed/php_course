<?php

/*
String functions
- strstr(String[Required], Find[Required], Last[Optional])
    => Alias [strchr]
    Case sensitive
- stristr(String[Required], Find[Required], Last[Optional])
    Case insensitive
- number_format(Number[Required], Number of Decimals[Optional], Decimal Point[Optional], Thousand Separator[Optional])
 */

// string string function will search for a string in a string
// it will return the character and the left string
echo strstr("Hasan UniCode 🦄", "C") . '<br>';
// needle parameter if true will return the right side
echo strstr("Hasan UniCode 🦄", "C", true) . '<br>';
// if no matching needle will return false

// the function stristr will do the same but case insensitive


// underscore only in the editor
echo 10_000_000 . "<br>";

// will manipulate the number with multiple parameter
echo number_format(10000000, 2, ".", ",") . "<br>";
