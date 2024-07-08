<?php

/*
String functions
- implode(Separator[Optional], Array[Required]) => join() is alias
- explode(Separator[Required], String[Required], Limit[Optional])
- str_shuffle(String[Required])
- strrev(String[Required])
- trim(String[Required], Charlist[Optional])
- ltrim(String[Required], Charlist[Optional])
- rtrim(String[Required], Charlist[Optional])
    - space
    - tap \t
    - new line \n
    - carriage return \r
    - vertical tab \x0B
    - null \0
 */

$fiends = ["Maha", "Ahmed", "Ali", "Salem"];

// implode will join all the array list with a given separator
echo implode($fiends) . "<br>";
echo implode(", ", $fiends) . "<br>";

// explode will return a list from a string by a string separator
$str = "Hasan Mohammed Salem Al-hamed Unicorn 🦄";
echo "<pre>";
print_r(explode(" ", $str));
echo "</pre>";

// using limit in explode will return the desired segments count
// the last segment will contain all the rest
echo "<pre>";
print_r(explode(" ", $str, 3));
echo "</pre>";
// negative values will remove from the last segments elements
echo "<pre>";
print_r(explode(" ", $str, -2));
echo "</pre>";

// str_shuffle will return the text with different letters positions
echo str_shuffle("ABCDEFG") . "<br>";

// strrev will reverse the string 
echo strrev("ABCDEFG") . "<br>";

echo strlen("   Hasan    ") . "<br>";
// trim will remove white spaces
echo strlen(trim("   Hasan    ")) . "<br>";
// given character to trim
echo trim("####Hasan#####", "#") . "<br>";
// in some languages the givin string to be trimmed should be exact the same
// but in php will remove all the different givin characters in the string
echo trim("@@##Hasan##@@#", "#@") . "<br>";
// ltrim will remove from the left of the string
// rtrim will do the opposite
echo ltrim("Hasan", "H") . "<br>";
