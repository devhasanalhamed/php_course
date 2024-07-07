<?php

/*
التكليف 06

    قم بعمل Function تقوم بعمل عمليات حسابية بإسم calculate
    العمليات الحسابية هي الجمع والطرح والضرب
    ال Function تقبل ثلاثة Parameters الرقم الأول والرقم الثاني ونوع العملية الحسابية وقم بتسميتهم كما تريد
    كل ما عليك هو تنفيذ العملية الحسابية بناء على المدخلات
    في حالة قام الشخص بكتابة نوع العملية الحسابية خطأ تظهر له رسالة أنه لا توجد هذه العملية
    العمليات الحسابية المتاحة هي add, subtract, multiply
    يمكن للشخص كتابة أول حرف فقط من العملية الحسابية فمثلا subtract يمكن أن يكتب s
    إذا لم يكتب الشخص العملية الحسابية نهائيا قم بعمل العملية الإفتراضية وهي الجمع

 */

function calculate(int $a, int $b, String $operation = "add")
{
    switch ($operation) {
        case "add":
        case "a":
            return $a + $b;
        case "subtract":
        case "s":
            return $a - $b;
        case "multiply":
        case "m":
            return $a * $b;
        default:
            return "Unknown Operation: $operation";
    }
}

echo calculate(10, 2, "g") . "<br>"; // 30
echo calculate(10, 20) . "<br>"; // 30
echo calculate(10, 20, "a") . "<br>"; // 30
echo calculate(10, 20, "s") . "<br>"; // -10
echo calculate(10, 20, "subtract") . "<br>"; // -10
echo calculate(10, 20, "multiply") . "<br>"; // 200
echo calculate(10, 20, "m") . "<br>"; // 200


/* 
Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200
*/
