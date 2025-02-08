<?php

/*
التكليف 13

    لديك ال Array التالية
    بدون إستخدام أي Function جاهزة مطلوب إيجاد أكبر عنصر في ال Array

 */

$nums = [10, 100, -20, 50, 30];

$result = 0;

foreach ($nums as $num) {

    if ($num > $result) $result = $num;
}

echo $result . "<br>";

/* 
 Output
 100
 */