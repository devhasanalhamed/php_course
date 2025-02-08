<?php

/*
Array functions

    - Every array has an internal pointer to its "current" element
    - Which is initialized to the first element
    - Functions returns value of array element that's currently pointed by the internal pointer

- current(Array[Required]) => return the current element
- next(Array[Required]) => move the internal pointer to the next element
- prev(Array[Required]) => move the internal pointer to the previous element
- reset(Array[Required]) => move the internal pointer to the first element
- end(Array[Required]) => move the internal pointer to the last element
*/


$friends = ["Fatima", "Hasan", "Saleh", ["Maha", "Mohammed", "Abeer"], "Hashim"];

echo current($friends) . "<br>";

echo next($friends) . "<br>";

echo end($friends) . "<br>";

echo reset($friends) . "<br>";


next($friends);
next($friends);
next($friends);

echo "<pre>";
print_r(current($friends))  . "<br>";
echo "</pre>";
