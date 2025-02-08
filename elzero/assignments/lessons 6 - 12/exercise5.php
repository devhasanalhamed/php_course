<?php

/*
التكليف 05 تحدي

    المطلوب طباعة السطور بالأسفل كما هي كل جملة في سطر مع جميع العلامات الموجودة
    ممنوع إستخدام علامة ال Backslash نهائيا \
    ممنوع إستعمال عناصر Html مثل ال <br>

 */

$doc =  <<<'Now'
 Hello "'Elzero'"
 We Love $Programming$
 Languages Specially "PHP"
 Now;

echo nl2br($doc);


 /*
Needed Output
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
 */