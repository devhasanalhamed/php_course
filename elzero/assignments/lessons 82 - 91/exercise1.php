<?php

/*
التكليف 01

    قم بحساب المساحة الكلية لجميع ال Drives الموجودة في جهازك ولو كانوا كثير يكفي أول إثنين فقط
    يجب طباعة المساحة بالتيرابايت شاهد المثال لترى المطلوب
    يجب أن يكون هناك رقمين فقط بعد العلامة العشرية

 */

function toTerabyte($size)
{
    return round($size / 1024 / 1024 / 1024 / 1024, 2);
}

echo toTerabyte(disk_total_space("C:")) . " Terabyte" . "<br>";

echo toTerabyte(disk_total_space("D:")) . " Terabyte" . "<br>";

/* 
Output Examples
"1.37 Terabyte"
"0.46 Terabyte"
*/