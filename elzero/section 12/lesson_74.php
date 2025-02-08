<?php

/*
Filter functions

- filter_var(Value[Required], Filter[Optional], Options[Optional])
    validate filters

    - FILTER_VALIDATE_BOOL => [true, yes, on, 1]
        flag => FILTER_NULL_ON_FAILURE => false for [false, no, off, 0, ""] only

    - FILTER_VALIDATE_URL
        flag => FILTER_NULL_ON_FAILURE
        flag => FILTER_FLAG_PATH_REQUIRED
        flag => FILTER_FLAG_QUERY_REQUIRED

    - FILTER_VALIDATE_IP
        flag => FILTER_NULL_ON_FAILURE
        flag => FILTER_FLAG_IPV4
        flag => FILTER_FLAG_IPV6

    - FILTER_VALIDATE_MAC
        flag => FILTER_NULL_ON_FAILURE
 */

$val = false; // true, on, yes, 1

// filter var will return the value if the boolean false, so could miss up the meaning is it false
// for boolean or false the value so we can use return null on failure flag
var_dump(filter_var($val, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));
echo "<br>";

$val = "example";

var_dump(filter_var($val, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));
echo "<br>";

$url = "https://www.devhasanalhamed.com";


var_dump(filter_var($url, FILTER_VALIDATE_URL, ["flags" => FILTER_NULL_ON_FAILURE]));
echo "<br>";

$url = "www.devhasa.%@#4nalhamed.com";


var_dump(filter_var($url, FILTER_VALIDATE_URL, ["flags" => FILTER_NULL_ON_FAILURE]));
echo "<br>";


$url = "https://www.devhasanalhamed.com/?name=hasan";

// combine multiple flags with pipe symbol [|]
var_dump(filter_var($url, FILTER_VALIDATE_URL, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));
echo "<br>";


$ipv4 = "192.168.1.1";

$ipv6 = "2001:0000:130F:0000:0000:09C0:876A:130B";

// if flag does not specify which ip version it will do both ipv4 and ipv6
var_dump(filter_var($ipv4, FILTER_VALIDATE_IP));
echo "<br>";

// $ipv6 = "2001:0000:130F:0000:0000:09C0:876A:130B5";

var_dump(filter_var($ipv6, FILTER_VALIDATE_IP));
echo "<br>";


var_dump(filter_var($ipv6, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV4]));
echo "<br>";


$mac = "00-B0-D0-63-C2-26";

// $mac = "050-B0-D0-63-C2-26";

var_dump(filter_var($mac, FILTER_VALIDATE_MAC));
echo "<br>";
