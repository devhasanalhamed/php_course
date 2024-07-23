<?php

/*
التكليف 04

    قم بالتعديل على ال Cookies المتبقية لتجعلها تنتهي مع إنتهاء الجلسة “Session”

 */

setcookie("site[font]", "Swat", -1, "/");

setcookie("site[color]", "blue", -1, "/");


echo "<pre>";
print_r($_COOKIE["site"]);
echo "</pre>";
