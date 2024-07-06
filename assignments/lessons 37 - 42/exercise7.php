<?php

/*
التكليف 07

    لديك Array فيها أرقام وحروف
    المطلوب طباعة الأرقام فقط تحت بعضها
    في السطر قبل الأخير قم بطباعة عدد الأرقام التي تم طباعتها بطريقة برمجية
    في السطر الأخير قم بطباعة عدد الحروف التي تم تجاهلها بطريقة برمجية
    لاحظ أن ال Array يمكن أن تتغير لذلك لا تقم بحساب عدد العناصر بنفسك

 */

$mix = [1, 2, "A", "B", "C", 3, 4];

$numbers_count = 0;
$letters_count = 0;

foreach ($mix as $value) {
    if (is_int($value)) {
        echo $value . "<br>";
        $numbers_count++;
    } else {
        $letters_count++;
    }
}

echo $numbers_count . " Numbers Printed<br>";
echo $letters_count . " Letters Ignored<br>";

 /* 
 Output
 1
 2
 3
 4
 "4 Numbers Printed"
 "3 Letters Ignored"
 */