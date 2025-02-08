<?php

/*
التكليف 18

    لديك المتغير التالي بإسم title
    المطلوب إستخدام ال str_replace Function للوصول للنتيجة المطلوبة
    في السطر التالي تقوم بطباعة كم عدد ال Replaces التي تمت

 */

$title = "E&z\$r0 W\$b Sch00&";

echo str_replace(["&", "$", "0"], ["l", "e", "o"], $title, $count) . "<br>";

echo "<pre>";
print_r($count);
echo "</pre>";

/* 
Output
"Elzero Web School"
7
*/