<?php

/*
التكليف 08

    لديك ال Array التالية
    المطلوب إضافة عنصر “D” لنهاية ال Array بأربع طرق مختلفة

 */

$chars = ["A", "B", "C"];

array_push($chars, "D");

echo "<pre>";
print_r($chars);
echo "</pre>";

array_pop($chars);

$chars[] = "D";

echo "<pre>";
print_r($chars);
echo "</pre>";

array_pop($chars);

$chars[count($chars)] = "D";

echo "<pre>";
print_r($chars);
echo "</pre>";


array_pop($chars);

$chars[3] = "D";

echo "<pre>";
print_r($chars);
echo "</pre>";

array_pop($chars);;

echo "<pre>";
print_r(array_pad($chars, 4, "D"));
echo "</pre>";

echo "<pre>";
print_r(array_merge($chars,  ["D"]));
echo "</pre>";

/* 
 Output
 Array
 (
   [0] => A
   [1] => B
   [2] => C
   [3] => D
 )
*/