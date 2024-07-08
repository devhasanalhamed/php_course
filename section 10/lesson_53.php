<?php

/*
String functions
- strpos(String[Required], Search[Required], Offset[Optional]) -Case Sensitive- => find() is alias
- strrpos(String[Required], Search[Required], Offset[Optional]) -Case Sensitive- => rfind() is alias
- stripos(String[Required], Search[Required], Offset[Optional]) -Case Insensitive- => find() is alias
- strripos(String[Required], Search[Required], Offset[Optional]) -Case Insensitive- => rfind() is alias
- substr_count(String[Required], Search[Required], Offset[Optional]) -Case Sensitive- => count() is alias
 */

//  string position will return the position of a string you search
var_dump(strpos("Hello World!", "H"));
echo "<br>";
// we can specify the start point and the start pint included
var_dump(strpos("   Hello World!", "H", 3));
echo "<br>";
// if not found it will return false
var_dump(strpos("Hello World!", "Q"));
echo "<br>";
// can start by negative index
var_dump(strpos("Hello World!", "W", -6));
echo "<br>";

// string right position will return the right position of a string you search
// the indexing is the same of the previous
var_dump(strrpos("Hello World!", "o"));
echo "<br>";

// stripos is the same of strpos but case insensitive
var_dump(stripos("Hello World!", "O"));
echo "<br>";
// strripos is the same of strrpos but case insensitive
var_dump(strripos("Hello World!", "O"));
echo "<br>";

// will count haw many times a string repeated in a given text
var_dump(substr_count("Hello World!", "o"));
echo "<br>";
// we can define a starting point to search from
// also we can define the length of the search which means how many character will be searched from the start
var_dump(substr_count("Hello World!", "o", 4, 2));
echo "<br>";

// concept of overlap string
// which means if a character counted in a word it will not be counted 
// as a character in the next word, look at the a in the middle
var_dump(substr_count("abcdabcda", "abcda"));
echo "<br>";
