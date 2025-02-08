<?php

/*
التكليف 02

    قم بطباعة محتوى ال Cookies كما في المثال
    في السطر التالي قم بطباعة الرسالة كما في المثال مع جلب القيم من ال Cookies

 */

echo "<pre>";
print_r($_COOKIE["site"]);
echo "</pre>";

if (isset($_COOKIE["site"])) {
    echo "Your Color is " . $_COOKIE["site"]["color"] . " And Your Font Is " . $_COOKIE["site"]["font"];
}

/*
 Array
 (
   [site] => Array
     (
       [color] => blue
       [font] => Swat
       [layout] => boxed
     )
 )
 "Your Color Is blue And Your Font Is Swat"
*/