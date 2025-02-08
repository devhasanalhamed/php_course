<?php

/*
Operators
used to perform operations on values.

Array operators
deal with arrays

+ => Union
== => Equal => same key and value
!= => Not Equal  
<> => Not Equal 
=== => Identical => same kay and value, same order, same type
!== => Not Identical
 */

$arr1 = [1 => "A", 2 => "B"];
$arr2 = [3 => "C", 4 => "D"];

echo "<pre>";
print_r($arr1 + $arr2);
echo "</pre>";

$arr3 = [1 => "10", 2 => "20"];
$arr4 = [2 => 20, 1 => 10];

var_dump($arr3 == $arr4);
echo "<br>";

$arr5 = [2 => 200, 1 => 100];
$arr6 = [1 => 100, 2 => 200];

var_dump($arr5 === $arr6);
