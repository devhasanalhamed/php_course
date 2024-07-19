<?php

/*
التكليف 07 تحدي

    لديك ال Array التالية تحتوي على أرقام وحروف
    لا نحتاج للأرقام في طباعة النتيجة
    إستخدم ما تعلمته لتخرج بالقيمة المطلوبة “Elzero”

 */

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

$result = $chars[0] . substr(strtolower(implode($chars)), 3);

echo  $result . "<br>";




 /* 
 Output
 "Elzero"
 */