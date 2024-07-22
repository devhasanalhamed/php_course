<?php

/*
التكليف 04

    لديك Function بإسم change_permissions تقبل منك Parameter واحد وهو إسم الملف
    يجب أن نتأكد أولا أن ال Parameter هو ملف وليس Directory
    يجب أن نتأكد أن الملف إمتداده هو txt وليس أي إمتداد آخر
    بعد أن تتحقق الشروط نريد تغيير التراخيص الخاصة بالملف
    نريد أن يكون ال Owner له صلاحيات لعمل كل شيء ولا يوجد أي صلاحيات نهائيا للباقي
    قم بتجربة ال Function على حسب الأمثلة بالأسفل لتتأكد أنها تعمل بشكل سليم
    يجب أن تتأكد أنه تم تغيير التراخيص بنجاح ثم تطبع رسالة “Permissions Changed” إذا كان نوع الملف txt

 */

function change_permissions($name): String
{
    if (is_dir($name)) return "This Is Directory And Only Files Allowed";
    if (!(pathinfo($name)["extension"] == "txt")) return "File Extension Is Not Txt";
    chmod($name, 0700);
    echo "Permissions " . decoct(fileperms($name)) . "<br>";
    if (decoct(fileperms($name)) == "0700") {
        return "Permissions Changed";
    }
    return "Permission Didn't Changed!";
}

// Test Cases

echo change_permissions("Elzero") . "<br>"; // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx") . "<br>"; // File Extension Is Not Txt
echo change_permissions("Result.txt") . "<br>"; // Permissions Changed
