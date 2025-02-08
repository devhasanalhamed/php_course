<?php

/*
التكليف 02

    قم بإنشاء Function تقبل عدد غير معروف من ال Arguments
    المطلوب جميع جميع ال Arguments بجانب بعضهم في متغير بإسم all
    المطلوب عمل Return لقيمة هذا المتغير
    المطلوب جلب ال Arguments بطريقتين مختلفتين
    شاهد المثال لتفهم الفكرة

 */

function get_argumentsOne(...$arguments)
{

    $all = implode(" ", $arguments);
    return $all;
}

echo get_argumentsOne("Hello", "Elzero", "Web", "School") . "<br>"; // Hello Elzero Web School

function get_argumentsTwo(...$arguments)
{
    $result = "";

    foreach ($arguments as $argument) {
        $result .= "$argument ";
    }
    return $result;
}

echo get_argumentsTwo("I", "Love", "PHP") . "<br>"; // I Love PHP


/* 
Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP
*/