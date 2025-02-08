<?php

/*
التكليف 05 تحدي

    قم بإستعمال 3 طرق تقوم بجلب نفس النتيجة الخاصة ب time() Function
    شاهد النتيجة لتفهم الفكرة

 */


// With time() Function
echo time() . "<br>"; // 1668020233
echo getdate()[0] . "<br>"; // 1668020233
echo strtotime("now") . "<br>"; // 1668020233

/* 
Output Needed With Other Ways
1668020233
1668020233
1668020233
*/