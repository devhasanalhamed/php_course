<?php

/*
String functions
    - wordwrap(String[Required], Width[Required], Break[Optional], Cut[Optional])
    - ord(String[Required])
    - chr(Number[Required])
    - similar_text(String1[Required], String2[Required], Percent[Optional])
        returns the number of matching characters
 */

$str = "Welcome to hasan code school VERY_VERY_VERY_LONG_STRING";

// if we didn't specify the number of characters that we wrap after by default is 75
// be default it will not break long words
echo wordwrap($str, 4, "<br>") . "<br>";
// we can turn cut long words on
echo wordwrap($str, 4, "<br>", true) . "<br>";

echo "<hr>";

// it will return the ascii code of a character 
echo ord("a") . "<br>"; // 97

// it will return the character of an ascii code
echo chr(97) . "<br>";

// it will return the numbers of matching characters, and could return as an optional value
// of precision
echo similar_text("Hello W_rld", "Hello World", $p) . "<br>";
echo "percent : $p" . "<br>";
echo similar_text("Hello World!", "Hello World!", $p) . "<br>";
echo "percent : $p" . "<br>";
