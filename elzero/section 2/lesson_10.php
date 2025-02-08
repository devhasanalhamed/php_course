<?php

/*
 Variables
 Naming rules * info
 1- Start with dollar sign $
 2- Start with a letter [A-Z] or [a-z] or Underscore
 3- Numbers allowed inside the name
 4- No special characters
 5- Case sensitive

 - Test single and double quotes

 Search 
 - Loosely typed language
*/
// php is a loosely typed language where the data type is dynamically configured
$username = "Hasan";

$userName = "Hamed";

echo $username;
echo "<br>";
echo $userName;

echo "<br>";

echo "Double quotation will allow parsing -$username";
echo "<br>";
echo 'Single quotation will not allow parsing -$username';
