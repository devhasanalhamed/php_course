<?php

/*
التكليف 02

    لديك ال Array التالية فيها قائمة الأصدقاء
    عند عمل Refresh للصفحة تأكد أنك تطبع عنصر عشوائي من ال Array كل مرة

 */

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

echo $friends[rand(0, 3)];

 // Example
 // Ibrahim
 // Ahmed