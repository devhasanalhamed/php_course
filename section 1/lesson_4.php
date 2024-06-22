<?php

// Type juggling + Automatic type conversion

echo 1 + "2";
echo "<br>";
echo gettype(1 + "2"); // Integer
echo "<br>";
echo true;
echo "<br>";
echo gettype(true); // Boolean
echo "<br>";
echo true + true;
echo "<br>";
echo gettype(true + true); // Integer
echo "<br>";
echo 5 + "5 Lessons"; // Integer => Warning
echo "<br>";
echo gettype(5 + "5 Lessons"); // Integer => Warning
echo "<br>";
echo 10 + 15.5;
echo "<br>";
echo gettype(10 + 15.5); // Double
echo "<br>";
