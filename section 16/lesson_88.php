<?php

/*
    Date And Time Functions

    - date_default_timezone_get()

    - date_default_timezone_set(timezone[Required])

    - date_create(Date/Time[Optional], Timezone[Optional])
    --- Time: Date/Time String || Current Time If NULL
    --- Timezone: Timezone String || Current Timezone

    - timezone_open(Timezone)

    - checkdate(M, D, Y) => All Required
    --- Validate A Gregorian Date

    Will Cover Later
    - date()
    - date_format()

 */

// return the default timezone 
echo date_default_timezone_get() . "<br>";

echo date("Y/m/d H:i:s") . "<br>";

// from list of supported timezone php
echo date_default_timezone_set("Asia/Riyadh") . "<br>";

echo date_default_timezone_get() . "<br>";

echo "Date in my timezone: " . date("Y/m/d H:i:s") . "<br>";

// create date object

// we put time and timezone to see the time for a person
// timezone open return an object of the timezone
$dateTime = date_create("now", timezone_open("Europe/Berlin"));

echo "Date object: " .  date_format($dateTime, "Y/m/d H:i:s") . "<br>";


// check if the date is valid or not
var_dump(checkdate(10, 25, 1982));
echo "<br>";
var_dump(checkdate(10, 35, 1982));
echo "<br>";
var_dump(checkdate(9, 02, 3500));
echo "<br>";
