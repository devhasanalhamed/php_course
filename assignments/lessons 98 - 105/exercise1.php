<?php

/*
التكليف 01

    قم بإنشاء ال Cookies لتظهر كما في الصورة
    وقت ال Expire هو بعد شهرين وخمس أيام من الوقت الحالي للإنشاء

 https://elzero.org/wp-content/uploads/2022/11/cookies-assignment-1.png
 */

setcookie("site[layout]", "boxed", strtotime("+2 months +5 days"), "/");

setcookie("site[font]", "Swat", strtotime("+2 months +5 days"), "/");

setcookie("site[color]", "blue", strtotime("+2 months +5 days"), "/");


echo "<pre>";
print_r($_COOKIE["site"]);
echo "</pre>";
