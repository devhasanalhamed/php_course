<?php

/*
Filter functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
        validate filters

        FILTER_VALIDATE_EMAIL
            flag => FILTER_NULL_ON_FAILURE

        FILTER_VALIDATE_INT
            flag => FILTER_NULL_ON_FAILURE
            Options => min_range
            Options => max_range
            Convert to int on success


        FILTER_VALIDATE_FLOAT
            flag => FILTER_NULL_ON_FAILURE
            Options => min_range
            Options => max_range
            Convert to float on success
 */

$email = "devhasanalhamed@gmail.com";
// [A-Z][A-Z][1-9]@[A-Z][a-z].[A-Z][a-z]2-6
$fake_email = "the!.@ola";


var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
echo "<br>";

var_dump(filter_var($fake_email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE));
echo "<br>";


$int = 101;
// we can add options for more conditions
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    [
        "flags" => FILTER_NULL_ON_FAILURE,
        "options" => ["min_range" => 50, "max_range" => 110],
    ],

));
echo "<br>";


$int = "101";
// it can convert this string to number with no problems
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    FILTER_NULL_ON_FAILURE
));
echo "<br>";


$int = "101.00";
// but this string is not can't be integer it can't read 
// it so it will fails, it will success if the validator is float
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    FILTER_NULL_ON_FAILURE
));
echo "<br>";


$int = 101.00;
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    FILTER_NULL_ON_FAILURE
));
echo "<br>";

// this also will fails because is not int
$int = 101.50;
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    FILTER_NULL_ON_FAILURE
));
echo "<br>";



// this is float and will success this time
$float = "105.00";
var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    [
        "flags" => FILTER_NULL_ON_FAILURE,
        "options" => ["min_range" => 10.00]
    ],
));
echo "<br>";


$float = 60;
var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    [
        "flags" => FILTER_NULL_ON_FAILURE,
        "options" => ["min_range" => 10.00]
    ],
));
echo "<br>";


$float = 0.009;
var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    [
        "flags" => FILTER_NULL_ON_FAILURE,
        "options" => ["min_range" => 0.005, "max_range" => 0.09]
    ],
));
echo "<br>";
