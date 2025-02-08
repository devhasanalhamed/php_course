<?php

/*
التكليف 06

    لديك مجموعة من الروابط في متغيرات
    المطلوب تنقية الروابط لتكون سليمة وصالحة
    ثم بعد ذلك تطبع النتيجة. شاهد المثال لتفهم الفكرة

 */

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

function sanitize_url($url)
{
    return filter_var($url, FILTER_SANITIZE_URL);
}

echo sanitize_url($url1) . "<br>";

echo sanitize_url($url2) . "<br>";

echo sanitize_url($url3) . "<br>";

echo sanitize_url($url4) . "<br>";


/* 
Output
http: //www.elzero.org
http: //elzero.org
https: //elzero.org
https://elzero.org
*/