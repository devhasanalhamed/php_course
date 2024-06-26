<?php

/*
Operators

Assignment Operators
write value to another

$a [+=] $b => Addition
$a [-=] $b => Subtraction
$a [/=] $b => Multiplication
$a [/=] $b => Division
$a [%=] $b => Modulus
$a [**=] $b => Exponentiation
 */

$a = 10;

$a += 20;

echo "a(10) += 20: ";
echo "$a";
echo "<br>";

$b = 20;
$b -= $a;

echo "b(20) -= a: ";
echo "$b";
echo "<br>";

$c = 30;

$c *= $b;
echo "c(30) *= b: ";
echo "$c";
echo "<br>";

$d = 40;

$d /= 5;
echo "d(40) /= 5: ";
echo "$d";
echo "<br>";

$f = 3;

$f **= $f;
echo "f(3) **= f: ";
echo "$f";
echo "<br>";

$g = 21;

$g %= 5;
echo "g(21) %= 5: ";
echo "$g";
echo "<br>";
