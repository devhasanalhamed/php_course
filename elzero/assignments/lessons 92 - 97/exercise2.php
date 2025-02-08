<?php

/*
التكليف 02

    لديك تاريخ مناسبة معينة ونريد طباعته بالشكل المطلوب
    قم بتغيير ال Time Zone لمدينة القاهرة في مصر
    في السطر الأول قم بطباعة ال Time Zone
    قم بزيادة 15 ساعة و 15 دقيقة و 15 ثانية على التاريخ الموجود
    في السطر الثاني قم بطباعة التاريخ كما في المثال

 */

$date = "2005-10-02";

date_default_timezone_set("Africa/Cairo");

echo date_default_timezone_get() . "<br>";

echo date_format(date_add(date_create($date), date_interval_create_from_date_string("15 hours 15 minutes 15 seconds")), "Y, F, l \'dS\' H:i:s") . "<br>";

/* 
 Output Needed
 "Africa/Cairo"
 "2005, October, Sunday '02nd' 15:15:15"
*/