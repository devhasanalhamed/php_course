<?php

/* 
Function
- function advanced training
- unpacking in arguments

Search 
- php variadic functions
- Splat operator (spread operator)
*/

$groupSkills = ["Html", "Css", "Javascript", "Php"];

function getData($name, $country, ...$skills)
{
    echo "Hello $name your country is $country <br>";
    foreach ($skills as $skill) {
        echo ".$skill. <br>";
    }
}

getData("Hasan", "Saudi Arabia", "Html", "Css", "Javascript", "Php");
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
// use unpacking on aa array
getData("Hasan", "Saudi Arabia", ...$groupSkills);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
getData("Hasan", "Saudi Arabia", ...["Html", "Css", "Javascript", "Php"]);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
