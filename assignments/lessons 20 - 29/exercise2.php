<?php

/*
التكليف 02

    لديك المتغير التالي قيمته 10 ونوعه String وبداخله رقم
    المطلوب طباعة الرقم ك Integer وفي السطر الذي يليه تطبع نوعه لتتأكد أنه Integer
    المطلوب تكرار ما سبق ب 3 طرق مختلفة
    إذا كنت ممن يحب أن يسبق الدورة التعليمية وتحب البحث كثيرا قم بعمل ما سبق بطريقتين إضافيتين ليصبح المجموع 5 طرق

 */

$a = "10";

echo +$a . "<br>";
echo gettype(+$a) . "<br>";

echo (int) $a . "<br>";
echo gettype((int)$a) . "<br>";

echo -$a * -1 . "<br>";
echo gettype(-$a * -1) . "<br>";

echo abs($a) . "<br>";
echo gettype(abs($a)) . "<br>";

echo $a + 0 . "<br>";
echo gettype($a + 0) . "<br>";

echo intval($a) . "<br>";
echo gettype(intval($a)) . "<br>";

settype($a, "int");
echo $a . "<br>";
echo gettype($a) . "<br>";

/*
Needed Output
10
"integer"
10
"integer"
10
"integer"

// For The People Who Love Searching
10
"integer"
10
"integer"
*/