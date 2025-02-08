<?php

/*
Function
- Optional return and null
- End after return any thing after return will not work
 */

$prizes = ["Desktop Computer", "Playstation", "Xbox", "Apple TV", "Laptop", "iPad", "iPhone",];

function getNumber(int $number1, int $number2)
{
    return  $number1 + $number2;
}

$prizeNumber =  getNumber(2, 1);
echo $prizes[$prizeNumber] . "<br>";
