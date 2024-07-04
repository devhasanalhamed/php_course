<?php

/*
Function
- default parameter value
-   using
-   test data
-   skip arguments
 */

//  use a default value parameter
// Note: you should not put a default value parameter in the first place
// where there are required values because it will cause mis order
function getData($firstName, $country, $age = "Unknown", $address = "Private Address")
{
    $lineOne = "Your name is $firstName Your country is $country <br>";
    $lineTwo = " Your age is $age You live in $address <br>";
    return $lineOne . $lineTwo;
}

echo getData("Hasan", "Saudi Arabia", 26);
// pass a desired argument and skip others
echo getData("Hasan", "Saudi Arabia", address: "Riyadh");
