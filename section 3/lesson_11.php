<?php

/*
Variable variable
it will take tha value of the variable and treat it like a new variable name 
 */

$username = "Hasan";
$$username = "Hamed";
$ $$username = "Al-Hamed";

echo $username;
echo "<br>";
echo $$username;
echo "<br>";
echo $Hasan;
echo "<br>";
echo $ $$username;
echo "<br>";

echo "Hello {$$username}"; // $$username
echo "<br>";
