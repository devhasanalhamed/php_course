<?php

/*
التكليف 01

    قم بإنشاء Function تقوم بالترحيب بالأشخاص
    ال Function تقبل إثنين Parameters وهم إسم الشخص ونوعه
    بناء على نوع الشخص تكتب له ال Title المناسب Mr For Male, Miss For Female
    إذا لم يكتب النوع لا تكتب أي Title قبل الإسم
    شاهد المثال لتفهم الفكرة

 */

function greeting($name, $gender = "")
{

    if ($gender != "") {
        if ($gender == "Male") {
            echo "Hello Mr $name";
        } else {
            echo "Hello Miss $name";
        }
    } else {
        echo "Hello $name";
    }
    echo "<br>";
}

echo greeting("Osama", "Male");
echo greeting("Eman", "Female");
echo greeting("Sameh");

/* 
Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
*/
