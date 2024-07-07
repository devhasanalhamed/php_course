<?php

/*
التكليف 04

    قم بإنشاء Function تقوم بضرب كل الأرقام التي تعطى لها ك Arguments في بعضها
    إذا كان ال Argument المستخدم في ال Function عبارة عن String لا تستعمله مع الأرقام
    إذا كان ال Argument عبارة عن Float قم بتحويله ل Integer قبل بدأ عملية الضرب

 */

function multiply(...$numbers)
{
    $result = 1;

    foreach ($numbers as $number) {
        if (is_string($number)) continue;

        $result *= (int) $number;
    }

    return $result;
}

echo multiply(10, 20) . "<br>"; // 200
echo multiply("A", 10, 30) . "<br>"; // 300
echo multiply(100.5, 10, "B") . "<br>"; // 1000

/* 
Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000
*/