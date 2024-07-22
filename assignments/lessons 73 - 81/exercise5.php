<?php

/*
التكليف 05

    لديك مجموعة من الروابط في متغيرات
    المطلوب إستخدام ال If Condition المختصرة للتأكد من الروابط صالحة أم لا Valid Or Not Valid
    ثم بعد ذلك تطبع النتيجة. شاهد المثال لتفهم الفكرة

 */

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

function check_url($url)
{
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        return "A Valid URL";
    }
    return "Not A Valid URL";
}

echo check_url($url1) . "<br>";

echo check_url($url2) . "<br>";

echo check_url($url3) . "<br>";

echo check_url($url4) . "<br>";
 
/* 
 Output
 "Not A Valid URL"
 "Not A Valid URL"
 "A Valid URL"
 "Not A Valid URL"
*/