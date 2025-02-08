<?php

/*
Data Types 
Arrays
Array with keys
Array without keys
Array with one kay
Array value override

print_r
 */

//  print_r will print human readable code
echo "<pre>";
print_r([
    // Arrays are zero indexed
    0 => "Hamed",
    /* 
    if we put a key value it will be taken otherwise it will
     add a default key index starting from the
      last index you have been specify
    */
    "A" => "Ahmed",
    "B" => "Baneen",
    "Hanan", // [1] => Fatimah
    true => "Ameerah", // if the index is repeated it will overwrite
    "1" => "Fatimah",
    "Hasan",
    10 => "Mohammed",
    "salem", // [11] => Salem
    7 => "Saleh",
    "Ghalib", // [12] => Ghalib
    "ages" => [
        14,
        18,
        24,
        26,
    ],
]);
echo "</pre>";
