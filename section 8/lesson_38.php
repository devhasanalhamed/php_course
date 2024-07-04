<?php

/*
Control structure
- Include files

Include 
Require
 */

// include("data.php");
include("data1.php");

echo "$data <br>";

echo "Pass 1 <br>";

// require do the same job of include and it's importing a file
// but if the file does not exists the require will make a fatal error and stop the application 
// uncomment next line
// require("data1.php");
echo "$data <br>";

echo "Pass 2 <br>";

// include once will only include the file once to avoid any errors could
// happen because of intertwine

include("redundant.php");
echo "$a <br>";

$a += $b;

include_once("redundant.php");
echo "$a <br>";
