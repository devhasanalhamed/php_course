<?php

/*
Operators 
used to perform operations on values.

Error control operator
- control the errors

@ 
- variable
- file
- include
 */


// Variable

//  we want to provide an error a is not defined

//! comment the below line to see the error
$a = 10;

// using @ symbol we can ignore the error
// die will terminate the script and show a message we define
$b = @$a or die("a is not defined");

echo $b;
echo "<br>";


// File

// file function will provide a file as an array
$f = file("file.txt");
//! uncomment the below line to see the error
// $f = @file("files.txt") or die("File not found");

echo "<pre>";
print_r($f);
echo "</pre>";


// Include
(@include("files.php")) or die("File not found");
