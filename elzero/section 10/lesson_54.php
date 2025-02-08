<?php

/*
String functions
- parse_str(String[Required], Array[Optional])
- quotemeta(String[Required])
= str_pad(String[Required], Length[Required], String[Optional], Direction[Optional])
    - STR_PAD_BOTH
    - STR_PAD_LEFT
    - STR_PAD_RIGHT
- strtr(String[Required], From[Required], To[Required])
 */

//  parse_str will extract data from a query string and store it in an array
// when can access the query after that
parse_str("name=hasan&email=devhasan@hotmail.com&os=mac&business=unicorn", $query);

echo "<pre>";
print_r($query);
echo "</pre>";


// in order to special characters from being escaped
// for security reasons
echo "Hello World! [] () * + > " . "<br>";
echo quotemeta("Hello World! [] () * + .") . "<br>";

// used to add padding for a string by define the string and the length of the string and the filling character and the position
// by using three flags (STR_PAD_BOTH, STR_PAD_LEFT, STR_PAD_RIGHT)
echo str_pad("Hasan", 10, "~", STR_PAD_BOTH) . "<br>";
echo str_pad("911", 6, "0", STR_PAD_LEFT) . "<br>";

// string translate used to replace text in a string with another
// either one text of multiple using an array
echo strtr("Hello Worls!", "s", "d") . "<br>";
$translate = ["@" => "H", "^" => "l", "#" => "r"];
echo strtr("@e^lo Wo#ld!", $translate) . "<br>";
