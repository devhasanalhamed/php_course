<?php

/*
التكليف 09

    لديك مجموعة من المتغيرات التي تساعدك في عمل المطلوب
    المطلوب طباعة إسمين فقط من ال Array وهما Sayed + Osama
    ممنوع إستعمال أي أرقام نهائيا
    يجب إستخدام ال Loop For

 */

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

foreach ($nums as $num) {
    if ($num < $help_num) {
        echo $names[$num] . "<br>";
    }
}
 
 /* 
 Output
 "Sayed"
 "Osama"
 */