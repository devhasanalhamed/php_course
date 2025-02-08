<?php

/*
التكليف 01

    قم بتغيير ال Time Zone لمدينة الرياض
    في السطر الأول قم بطباعة ال Time Zone
    في السطر الثاني قم بطباعة التاريخ كما في المثال
    في السطر الثالث قم بطباعة التاريخ كما في المثال
    طبعا التاريخ سيكون مختلف ولكن نريده بنفس التنسيق

 */

date_default_timezone_set("Asia/Riyadh");

echo date_default_timezone_get() . "<br>";

echo date("D, d M y - H:i:s A") . "<br>";

echo date("l, d F Y - H:i:s A") . "<br>";


/* 
Output Needed
"Asia/Riyadh"
"Wed, 09 Nov 22 - 07:11:22 PM"
"Wednesday, 09 November 2022 - 07:11:22 PM"
*/