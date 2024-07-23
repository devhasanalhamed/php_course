<?php

/*
التكليف 04

    قم بعمل نفس ما سبق بإستخدام Date_Diff Function

 */

$date = "1990-10-01";
$base = "1970-01-01";

echo "<pre>";
print_r(date_diff(date_create($base), date_create($date)));
echo "</pre>";


echo "From Epoch Time Till 1990-10-01 Is Approximately " . date_diff(date_create($base), date_create($date))->days . " Days <br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately " . date_diff(date_create($base), date_create($date))->y . " Years <br>";
/* 
Output Needed
 "From Epoch Time Till 1990-10-01 Is Approximately 7578 Days"
 "From Epoch Time Till 1990-10-01 Is Approximately 20 Years"
*/