<?php

/*
التكليف 05 تحدي

    ممنوع إستخدام الأرقام نهائيا ويمكنك إستخدام قيم المتغيرات مع ما تعلمته لتنفيذ المطلوب
    المطلوب طباعة الأرقام فقط من أول الرقم إثنين للنهاية
    فكر قليلا بالمنطق كيف ستجعل ال Loop يتجاهل الرقم 1
    يجب إستخدام ال Loop For لعمل المطلوب

 */

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($i =  0; $i < count($mix); $i++) {
    if ($mix[$i] == 1 || !is_int($mix[$i])) {
        continue;
    }
    echo $mix[$i] . "<br>";
}

/* 
Output
2
3
4
*/