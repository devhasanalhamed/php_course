<?php

/*
التكليف 09

    قم بعمل Anonymous Function تكتب رسالة ترحيبية
    بعد عمل ال Function قم بعمل نسخة منها بواسطة ال Arrow Function Syntax
    شاهد المثال لتفهم المطلوب

 */

$greet = function () {
    return "Greetings";
};

$greet = fn () => "Greetings";

echo $greet("Osama"); // Greetings


/*
Needed Output
echo $greet("Osama"); // Greetings
*/
