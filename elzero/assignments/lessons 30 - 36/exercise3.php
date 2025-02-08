<?php

/*
التكليف 03

    لديك Form تقوم بإرسال البيانات لنفس الصفحة
    المطلوب فحص إذا كان نوع ال Request هو Post وليس Get قبل إظهار البيانات المطلوبة
    المطلوب طباعة الرسالة كما في الأسفل ثم بعدها إسم المستخدم الذي يكتبه الشخص في ال Form
    لديك Array تحتوي على بعض الأسماء وهي تخص ال Admin
    قم بعمل شرط داخل الشرط الخاص بفحص ال Request يفحص إذا كان الإسم المكتوب واحد من هذه الأسماء أم لا
    إذا كان واحد من هذه الأسماء تقوم بطباعة رسالة “This Username {Username} Is Admin”

 */


$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["user"];
    echo "The Request Method Is Post And Username Is {$username}";
    echo "<br>";
    if (in_array($username, $admins)) {
        echo "This Username {$username} Is Admin";
    }
}

/* 
Needed Output
"The Request Method Is Post And Username Is Osama"
"This Username Osama Is Admin"
*/
?>

<form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
</form>