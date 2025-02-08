<?php

/*
التكليف 03

    لديك متغير num قيمته رقم 2 لا تقم بالتعديل عليه ولا على الشرط الموجود داخل ال While
    يجب عليك كتابة ال Code داخل ال Loop لتطبع الأرقام بنفس ال Pattern المطلوب

 */

$num = 2;
while ($num < 520) {
    if ($num == 2) {
        echo 1 . "<br>";
        $num = $num * 2;
    } else {
        echo $num . "<br>";
        $num = $num * 2 + 2;
    }
}
 
 /* 
 Needed Output
 1
 4
 10
 22
 46
 94
 190
 382
*/