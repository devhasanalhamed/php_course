<?php

/*
Array functions

- array_shift(Array[Required])
    - shift an element of the beginning of an array
    - this function will reset the internal pointer to the first element

- array_pop(Array[Required])
    - pop an element of the end of an array
    - this function will reset the internal pointer to the last element

- array_push(Array[Required], Element/s[Required])
    - push one or more elements to the end of an array
    - you can use $arr[]

- array_unshift(Array[Required], Element/s[Required])
    - unshift one or more elements to the beginning of an array
    - this function will reset the internal pointer to the last element

 */

$class_subjects = ["رياضيات", "أحياء", "وطنية"];

echo "<pre>";
print_r($class_subjects);
echo "</pre>";


$first_subject = array_shift($class_subjects);

echo $first_subject . "<br>";

echo "<pre>";
print_r($class_subjects);
echo "</pre>";

$last_subject = array_pop($class_subjects);

echo $last_subject . "<br>";

echo "<pre>";
print_r($class_subjects);
echo "</pre>";

array_push($class_subjects, "رياضيات", "التربية الوطنية", "قواعد اللغة العربية");

$class_subjects[] = "التاريخ";


echo "<pre>";
print_r($class_subjects);
echo "</pre>";

array_unshift($class_subjects, "التربية البدنية");

echo "<pre>";
print_r($class_subjects);
echo "</pre>";

echo "<pre>";
echo "</pre>";

echo "<pre>";
echo "</pre>";
