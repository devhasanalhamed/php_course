<?php

/*
التكليف 07

    لدينا ملف txt بإسم elzero.txt يحتوي على سطرين من النصوص
    في أول سطر هناك كلمة Osamaa نريد تغييرها إلى Elzero

 */

$handle = fopen("elzero.txt", "c+");

fseek($handle, mb_strlen("hello "));
fwrite($handle, "Elzero", mb_strlen("Elzero"));

fclose($handle);

echo file_get_contents("elzero.txt");

/*
 elzero.txt New Content
Hello Elzero Web
School
*/