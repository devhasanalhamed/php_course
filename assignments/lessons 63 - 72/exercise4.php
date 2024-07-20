<?php

/*
التكليف 04

    لديك ال Array التالية
    المطلوب إستخدام ال Array Built-In Functions لتخرج بال Output المطلوب
    يجب عمل الحل مرة بواسطة ال Array_Reduce مع إستخدام Anonymous Function
    ثم عمله مرة أخرى بوسيلة أخرى

 */

$nums = [10, 20, 30];

echo array_reduce($nums, fn ($p, $c) => $p + $c) . "<br>";

echo array_sum($nums) . "<br>";

$result = 0;
foreach ($nums as $num) {
    $result += $num;
}

echo $result . "<br>";
/* 
 Output
 60
 60
*/