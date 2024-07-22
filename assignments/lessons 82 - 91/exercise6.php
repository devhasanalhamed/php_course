<?php

/*
التكليف 06 تحدي

    لدينا ملف txt بإسم elzero.txt يحتوي على ثلاث سطور من النصوص
    نريد قراءة أول سطرين فقط وطباعتهم في الصفحة على سطر واحد
    لا نريد قراءة آخر سطر
    إستخدم ما تعلمته لتقوم بعمل هذا التكليف ب 4 طرق مختلفة
    شاهد محتوى الملف والنتيجة المطلوبة
    يجب أن تكون الحلول كلها تعمل في وقت واحد
    إذا إستخدمت ال fopen يجب أن تكون مرة واحدة فقط

 */

echo substr(file_get_contents("elzero.txt"), 0, strpos(file_get_contents("elzero.txt"), "No")) . "<br>";

echo file("elzero.txt")[0] . file("elzero.txt")[1] . "<br>";

$handle = fopen("elzero.txt", "r");

echo fgets($handle);
echo fgets($handle);
echo "<br>";

rewind($handle);
echo fread($handle, 26) . "<br>";

fclose($handle);


/* Needed Output
"Hello Elzero Web School"
"Hello Elzero Web School"
"Hello Elzero Web School"
"Hello Elzero Web School"
*/