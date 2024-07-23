<?php

/*
التكليف 03

    لديك تاريخ مناسبة معينة
    قم بتغيير ال Time Zone لمدينة القاهرة في مصر
    قم بطباعة السطرين كما في المثال
    نريد حساب عدد الأيام والسنين من بداية الوقت حتى التاريخ الموجود
    قم بعمل المطلوب بدون إستخدام Date_Diff Function

 */

$date = "1990-10-01";

date_default_timezone_set("Africa/Cairo");


echo "From Epoch Time Till 1990-10-01 Is Approximately " . round(getdate(strtotime($date))[0] / 60 / 60 / 24, 1) . " Days" . "<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately " . round(getdate(strtotime($date))[0] / 60 / 60 / 24 / 365, 1) . " Years" . "<br>";


/* 
Output Needed
 "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
 "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
*/