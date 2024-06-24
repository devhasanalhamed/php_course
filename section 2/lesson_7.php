<?php

/* 
Data Types 
String and escaping

nl2br()
*/

echo "Hello PHP";
echo "<br>";
echo "Hello 'PHP'"; // different quotation 
echo "<br>";
echo "Hello \"PHP\""; // Use backslash to escape
echo "<br>";
echo "Hello PHP\\"; // Use backslash to escape another backslash
echo "<br>";
echo nl2br("Hello
PHP "); // Create multiple line on client side using nl2br function
echo "<br>";
// The reason of that php does not allow multiple line on printing like
// java script that is because it's server side rendering
