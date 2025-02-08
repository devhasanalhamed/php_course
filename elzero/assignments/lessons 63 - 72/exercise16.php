<?php

/*
التكليف 16

    لديك ال Array التالية
    إستخدم ما تعلمته لتقوم بعمل المطلوب
    المطلوب عدم عرض ال Strings
    طباعة الأرقام الفردية فقط
    ترتيب الأرقام

 */

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

$result = array_filter($mix, function ($e) {
    if (is_numeric($e) && $e % 2 != 0) return true;
    return false;
});

sort($result);

echo "<pre>";
print_r($result);
echo "</pre>";

/* 
 Output
 Array
 (
   [0] => 1
   [1] => 3
   [2] => 5
   [3] => 7
 )
*/