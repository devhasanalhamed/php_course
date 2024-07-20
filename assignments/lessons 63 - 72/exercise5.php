<?php

/*
التكليف 05

    لديك ال Array التالية
    المطلوب جمع الأرقام كلها وإرجاع النتيجة
    يجب عليك إستثناء رقم 5 من عملية الجمع
    يمكنك التدرب على ال Higher Order Functions وعمل المطلوب بدون تدخل من أي شيء آخر

 */

$nums = [5, 10, 20, 5, 30, 40];

echo array_reduce(array_filter($nums, fn ($n) => $n != 5), fn ($p, $c) => $p + $c) . "<br>";



echo array_reduce($nums, function ($p, $c) {
    if ($c == 5) return $p;
    return $p + $c;
}) . "<br>";

/* 
 Output
 100
*/