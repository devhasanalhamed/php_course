<?php

/*
التكليف 03

    قم بإزالة ال Cookie الخاصة بال Layout من ال Cookies السابقة ليتبقى لديك ال Font وال Color فقط

 */

setcookie("site[layout]", "boxed", -1, "/");

echo "<pre>";
print_r($_COOKIE["site"]);
echo "</pre>";
