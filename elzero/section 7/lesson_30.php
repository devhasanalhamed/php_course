<?php

/*
Control structure
Nested if condition and training

 */

$name = "Hasan";

$is_student = true;
$is_arabic = true;
$country = "Saudi Arabia";
$country_discount = 50;
$price = 100;
$student_discount = 10;
$arabic_discount = 40;

if ($country == "Saudi Arabia") {

    if ($is_student) {

        if ($is_arabic) {
            echo "Hello $name";
            echo "<br>";
            echo "Country discount $country_discount";
            echo "<br>";
            echo "student discount $student_discount";
            echo "<br>";
            echo "arabic discount $arabic_discount";
            echo "<br>";
            echo "The final price is " . $price - $country_discount - $student_discount - $arabic_discount;
            echo "<br>";
            echo "أرححححححححححب نفداك يا ابن العم";
        } else {

            echo "Hello $name";
            echo "<br>";
            echo "Country discount $country_discount";
            echo "<br>";
            echo "student discount $student_discount";
            echo "<br>";
            echo "The final price is " . $price - $country_discount - $student_discount;
        }
    } else {

        echo "Hello $name";
        echo "<br>";
        echo "Country discount $country_discount";
        echo "<br>";
        echo "The final price is " .  $price - $country_discount;
    }
} else {
    echo "Hello $name";
    echo "<br>";
    echo "No discount";
    echo "<br>";
    echo "The final price is $price";
}
