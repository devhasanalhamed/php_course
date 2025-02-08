<?php

/*
Filter functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    Sanitize filters

        FILTER_SANITIZE_EMAIL
        remove all but letters + digits + !#$%&'*+-=?^_`{|}~@.[]
        test ¥

        FILTER_SANITIZE_NUMBER_INT
        remove all but digits, +, -


        FILTER_SANITIZE_NUMBER_FLOAT
        remove all but digits, +, -, and optionally [.,eE]
        flags => FILTER_FLAG_ALLOW_THOUSAND
        flags => FILTER_FLAG_ALLOW_FRACTION


        FILTER_SANITIZE_URL
        remove all but letters + digits + $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
        test ¥ + space
 */

$email = "dev   hasan    alhamed   @ gmai¥¥¥¥¥¥¥¥¥¥¥¥¥¥¥¥l.com";

var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
echo "<br>";



$int = "1 0                  0 + 200";
// filter sanitize number integer will always return a string 
var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
echo "<br>";


$float = "1,200,300.45    6 + 100";
// filter sanitize number integer will always return a string 
var_dump(filter_var($float, FILTER_SANITIZE_NUMBER_FLOAT, ["flags" => FILTER_FLAG_ALLOW_FRACTION | FILTER_FLAG_ALLOW_THOUSAND]));
echo "<br>";


$url = "https:/   / d  e v h a s an a l h a m  e ¥ ¥¥¥¥¥d.com";
// filter sanitize number integer will always return a string 
var_dump(
    filter_var($url, FILTER_SANITIZE_URL)
);
echo "<br>";
