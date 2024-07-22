<?php

/*
التكليف 02

    قم بحساب مساحة أي ملف فيديو عندك في جهازك
    في السطر الأول قم بطباعة المساحة بالميجا بايت
    في السطر الثاني قم بطباعة المساحة بالكيلو بايت
    دع ال Script يحسب الملف في مكانه بدون نقله إلى أي مكان آخر

 */

echo  "Size In Megabyte Is " . round(filesize('C:\Users\there\Desktop\x.mp4') / 1024 / 1024, 2) . "<br>";


echo "Size In Kilobyte Is " . round(filesize('C:\Users\there\Desktop\x.mp4') / 1024, 2) . "<br>";



/* 
Output
"Size In Megabyte Is 32"
"Size In Kilobyte Is 33261"
*/