<?php

/*
    Cookies
    - Modify
    - Delete
    - Add Array
  */

// to modify a cookie we resetting the cookie with new values
setcookie("style", "light");

// to delete a cookie we set it to expire in the past, only given 10 seconds to notice it in the browser
// we can also given it a time of 1 and it will be deleted
setcookie("style", "light", time() + 10);


// also we can use an array to store values with the method below, and this is very helpful

setcookie("dev[user]", "dev97", strtotime("+1 year"));
setcookie("dev[last_visit]", date_format(date_create(), "Y-m-d H:i:s"), strtotime("+1 year"));

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

// to check if cookie are set before using it
if (isset($_COOKIE["dev"])) {
  echo "<pre>";
  print_r($_COOKIE["dev"]);
  echo "</pre>";
}
