<?php

/*
التكليف 11

    لديك ال Array التالية
    بدون إستخدام أي Function جاهزة قم بحساب عدد عناصر ال Array

 */

$arr = ["A", "B", "C", "D", "E"];
$count = 0;

while (!empty($arr[$count])) {
    $count++;
}

echo $count . "<br>";

/* 
 Output
 5
*/