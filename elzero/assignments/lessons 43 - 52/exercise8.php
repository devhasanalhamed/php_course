<?php

/*
التكليف 08 تحدي

    لديك متغير بإسم message يحتوي على القيمة Hello
    غير مسموح بكتابة أي كلمة بيدك وإستخدم فقط المتغير message
    غير مسموح بإنشاء متغير بإسم Hello وبواسطة ما تعلمته فكر كيف سيكون موجود
    شاهد المثال لتفهم المطلوب

 */

$message = "Hello";

$$message = function () use ($message) {

    echo "$message " . func_get_arg(0);
};

echo $Hello("Osama"); // Hello Osama