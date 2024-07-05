<?php

/*
التكليف 02

    لديك رقم 100
    المطلوب إستخدام طريقتين لطباعة نوع البيانات
    يمكن أن تكون int أو Integer لا توجد أي مشكلة
    هناك طريقة ثالثة يمكنك البحث عنها لزيادة معلوماتك وهي إختيارية

 */

$number = 100;

echo gettype($number) . "<br>";
var_dump($number);
echo  "<br>";

if (is_int($number)) {
    echo "int";
}
