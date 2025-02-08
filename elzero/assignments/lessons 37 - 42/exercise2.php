<?php

/*
التكليف 02

    لديك متغير index قيمته 0 لا تقم بالتعديل عليه
    نريد أن تطبع الأرقام الزوجية فقط تحت بعضها من رقم 2 وحتى رقم 20
    يجب عليك عمل ما سبق مرة بإستخدام ال While ومرة بإستخدام ال For ومرة بإستخدام ال Do While

 */

$index = 0;

$countWhile = $index;
$countDoWhile = 2;
while ($countWhile <= 20) {
    $countWhile++;
    if ($countWhile % 2 == 0) {
        echo $countWhile . "<br>";
    } else {
        continue;
    }
}

echo "------------------------------ <br>";

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "<br>";
}


echo "------------------------------ <br>";


do {
    if ($countDoWhile % 2 == 0) {
        echo $countDoWhile . "<br>";
    }
    $countDoWhile += 2;
} while ($countDoWhile <= 20);


/*
Needed Output
2
4
6
8
10
12
14
16
18
20
*/