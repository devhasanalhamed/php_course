<?php

/*
التكليف 05

    لديك مجموعة من الشروط ونريد أن نجمع الشروط في مكان واحد
    المطلوب أن تكون في سطر واحد فقط

 */

$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18 && gettype($name) === "string" && $country === "Egypt") :
    echo "The Age Is Good To Go<br>";
    echo "The Name Is Good To Go<br>";
    echo "The Country Is Good To Go<br>";
endif;

/*
Needed Output
"The Age Is Good To Go"
"The Name Is Good To Go"
"The Country Is Good To Go"
*/