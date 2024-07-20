<?php

/*
التكليف 07

    لديك ال Array التالية
    المطلوب كتابة أسطر ال Code في المكان المخصص لتتم طباعة النتيجة المطلوبة
    يجب عدم التعديل على السطور المكتوبة ولا على ال Array
    يجب عدم كتابة سطور أكثر من المطلوبة

 */

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);

echo current($names) . "<br>"; // "Sayed"

end($names);

echo current($names) . "<br>"; // "Ali"

reset($names);

echo current($names) . "<br>"; // "Osama"

end($names);
prev($names);

echo current($names) . "<br>"; // "Mahmoud"
