<?php

/*
    Cookies

    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only

    Important
    - DO NOT Store Sensitive Information
    - Not Everything Saved To Cookies
  */

// if we want our cookie to be available in all paths of our domain we can specify that in the path argument
setcookie("style", "dark", time() + 60 * 60 * 24 * 7, "/");

// if didn't define a path it will be available for current and all of it's subsets
setcookie("first_time", "false", strtotime("+1 week"));

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo $_COOKIE["style"];
