<?php

// Data Types
// ------------
// bool => Boolean
// int => Integer
// float => Floating point number | Double
// string 
// array 
// Other Types 
// gettype() 

echo gettype(true);
echo "<br>";
echo gettype(10);
echo "<br>";
echo gettype(25.5);
echo "<br>";
echo gettype(-250);
echo "<br>";
echo gettype("Text");
echo "<br>";
// Array with key and value
echo gettype(array("EG" => "Egypt", "SA" => "Saudi Arabia"));
echo "<br>";
// Array without key and value
echo gettype(array("Egypt","Saudi Arabia"));
echo "<br>";
// Array shortcut
echo gettype(["Egypt","Saudi Arabia"]);
echo "<br>";