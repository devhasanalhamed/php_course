<?php

/*
التكليف 12

    لديك ال Array التالية
    بدون إستخدام أي Function جاهزة قم بحساب مجموع الأرقام الموجودة في ال Array

 */

$nums = [11, 2, 10, 7, 20, 50];

$result = 0;

foreach ($nums as $num) {

    $result += $num;
}

echo $result . "<br>";

/*
 Output
 100
 */