<?php

/*
التكليف 07

    لديك متغيريين يحتوا على رقمين ومتغير يخص العلامة الحسابية
    العلامة الحسابية يمكن أن تكون واحدة من أربعة + – * /
    قم بعمل شروط تقوم بالعملية الحسابية على الرقمين بناء على العملية المكتوبة
    إذا قمت بكتابة علامة حسابية غير الأربعة الموجودين تظهر لك رسالة كما في الأمثلة
    إذا كانت العلامة الحسابية هي القسمة قم بطباعة الرقم بدون كسور في السطر الأول وفي السطر الثاني باقي القسمة
    شاهد كل Test Case والنتيجة الخاصة بها

 */

$num_one = 23;
$num_two = 5;
$op = "+";


switch ($op) {
    case "+":
        echo $num_one + $num_two;
        break;

        // + Operator

        // Output
        // 28

    case "-":
        echo $num_one - $num_two;
        break;

        // Output
        // 18

    case "/":
        echo intval($num_one / $num_two) . "<br>";
        echo $num_one % $num_two;
        break;

        // / Operator

        // Output
        // 4
        // 3

    case "*":
        echo $num_one * $num_two;
        break;

        // * Operator

        // Output
        // 115

    default:
        echo "Unknown Operation";

        // Anything Else

        // Output
        // "Unknown Operation"
}
