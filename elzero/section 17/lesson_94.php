<?php

/*

    Cookies

    - Examples
    --- Popup
    --- Custom Settings
    --- Remember Me => Login

    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only

Search
infinite cookie, that make cookie for all browsers in the device
 */

// if we didn't set cookie period it will be for the current session only.
setcookie("Hello_Cookie", "This is my first cookie 🍪");

// we can set expire date for a cookie by setting the third argument, time() will give us the time stamp of the current time
// which is the seconds from 1970 jan 1 until now so we can simply add 60*60*24*7 to it for a week
setcookie("Weekly_Cookie", "This cookie will stay for a week!", time() + 60 * 60 * 24 * 7);
