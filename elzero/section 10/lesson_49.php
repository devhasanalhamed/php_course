<?php

/*
String 
- Access Elements
    - String as array of characters 
    - Access elements by index "zero based indexing"
    - Negative index are allowed
- Update element
    - Update current elements
    - Add new elements

- Search 
    - Single-Byte and Multi-Byte
 */


$str = "Hasan";

echo "String : $str" . "<br>";
echo "Number of characters: " . strlen($str) . "<br>";
echo "First letter: $str[0]" . "<br>";
echo "4th letter: $str[3]" . "<br>";
// in new php we can use negative numbers to reach the index in reverse
echo "Last letter (-1): {$str[-1]}" . "<br>";
echo "Last letter (strlen($str) - 1): {$str[strlen($str) - 1]}" . "<br>";


echo $str . "<br>";
$str[0] = "I";
$str[1] = "h";
echo $str . "<br>";
// if we update on index not available it will add it normally
$str[5] = "'";
$str[6] = "s";
echo $str . "<br>";
