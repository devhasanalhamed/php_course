<?php

/*
التكليف 02

    لديك ال Code التالي يحتوي على متغيرين
    المطلوب طباعة كلمة Web بخمس طرق مختلفة بواسطة ما تعلمته
    الخمس طرق يكونوا بواسطة Echo فقط

 */

$name = "elzero";
$$name = "Web";

echo "Web" . "<br>";
echo $$name . "<br>";
echo $elzero . "<br>";
echo "{$$name}" . "<br>";
echo "{$elzero}" . "<br>";
