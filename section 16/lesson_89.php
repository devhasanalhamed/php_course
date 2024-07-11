<?php

/*
    Date And Time Functions

    - date_format()

    [Year]
    - Y => Four Digits
    - y => Two Digits

    [Month]
    - m => 01-12
    - M => Text Month => 3 Letters
    - F => Full Text
    - t => Number Of Days In This Month

    [Day]
    - d => Day of The Month 1-31
    - j => Day Without Leading Zero
    - D => Text Day => 3 Letters
    - l => Full Text
    - z => Day Of The Year 0-365
    - S => st, rd, nth Suffix For Day Of The Month

    [Time]
    - a => Small am/pm
    - A => Capital AM/PM

    [Hour]
    - g => 1-12
    - h => 01-12
    - G => 0-23
    - H => 00-23

    [Minutes, Seconds, Micro]
    - i => 00-59
    - s => 00-59
    - u => Microseconds
 */

date_default_timezone_set("Asia/Riyadh");

$dateTime = date_create();

echo date_format($dateTime, "y") . "<br>";

echo date_format($dateTime, "Y") . "<br>"; // 2022
echo date_format($dateTime, "y") . "<br>"; // 22

// Month
echo date_format($dateTime, "Y-m") . "<br>";
echo date_format($dateTime, "Y-M") . "<br>";
echo date_format($dateTime, "Y-F") . "<br>";
echo date_format($dateTime, "t") . "<br>"; // 30

// Day
echo date_format($dateTime, "Y-m-d") . "<br>";
echo date_format($dateTime, "Y-m-j") . "<br>";
echo date_format($dateTime, "Y-m-D") . "<br>";
echo date_format($dateTime, "Y-m-l") . "<br>";
echo date_format($dateTime, "Y-m-l z") . "<br>";
echo date_format($dateTime, "Y-m-l djDl") . "<br>";
echo date_format($dateTime, "Y-m-l S") . "<br>";
