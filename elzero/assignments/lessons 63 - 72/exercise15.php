<?php

/*
التكليف 15 تحدي

    لديك ال Array التالية
    ممنوع إستخدام أي Function جاهزة لعمل المطلوب
    يمكنك فقط إستخدام رقم 0 مع ما تعلمته لتصل للمطلوب

 */

$chars = ["o", "r", "e", "z", "l", "E"];
$result = [];

for ($i = 0; $i < count($chars); $i++) {
    array_unshift($result, $chars[$i]);
}

echo join($result);

/* 
Output
 "Elzero"
*/