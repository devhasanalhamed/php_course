<?php

/*
التكليف 05

    إبحث عن أربع طرق لطباعة إسم الملف الحالي مع الإمتداد
    شاهد النتيجة في الأسفل

*/

echo basename(__FILE__) . "<br>";

echo pathinfo(__FILE__)["basename"] . "<br>";

echo substr(realpath(__FILE__), (strrpos(realpath(__FILE__), "\\") + 1)) . "<br>";

echo basename($_SERVER["PHP_SELF"]) .  "<br>";

echo basename($_SERVER["SCRIPT_FILENAME"]) .  "<br>";

echo basename($_SERVER["SCRIPT_NAME"]) .  "<br>";

echo basename($_SERVER["REQUEST_URI"]) .  "<br>";


/* 
Output

"index.php"
"index.php"
"index.php"
"index.php"
*/