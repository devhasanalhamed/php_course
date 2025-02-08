<?php

/*
التكليف 17 تحدي

    لديك ال Array التالية
    المطلوب عدم إستخدام ال Shuffle Function نهائيا
    المطلوب عمل Shuffle للعناصر الموجودة داخل ال Array

 */

$nums = [1, 2, 3, 4, 5, 6];

$result = [];


foreach (array_rand($nums, 5) as $key) {
    array_push($result, $nums[$key]);
}

foreach ($nums as $num) {
    if (!in_array($num, $result)) {
        array_push($result, $num);
    }
}


echo "<pre>";
print_r($result);
echo "</pre>";

 // Output
 // Every Time The Array Elements Will Be Shuffled
 
/* 
Example 1
 Array
 (
   [0] => 5
   [1] => 1
   [2] => 6
   [3] => 2
   [4] => 4
   [5] => 3
 )
 
Example 2
 Array
 (
   [0] => 4
   [1] => 3
   [2] => 6
   [3] => 1
   [4] => 5
   [5] => 2
 )
*/