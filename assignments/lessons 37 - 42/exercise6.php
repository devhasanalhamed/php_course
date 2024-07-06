<?php

/*
التكليف 06

    لديك Array فيها قائمة أسماء بعض الناس والمبلغ الذي تحتاجه منهم
    نريد عمل Loop لنطبع المطلوب كما في المثال

 */

$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach ($money as $name => $amount) {

    echo "The Name Is $name And I Need $amount Pound From Him <br>";
}

 /* 
 Output
 "The Name Is Ahmed And I Need 100 Pound From Him"
 "The Name Is Sayed And I Need 150 Pound From Him"
 "The Name Is Osama And I Need 100 Pound From Him"
 "The Name Is Maher And I Need 250 Pound From Him"
 */