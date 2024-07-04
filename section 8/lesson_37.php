<?php

/*
Control structure
- loop

Break, Continue
- break ends the execution of (for, foreach, while, do while, switch)
- continue skip current iteration
 */

$countries = ["US", "SA", "UAE", "YE", "EG", "RU"];

foreach ($countries as $country) {
    if ($country == "US") continue;
    echo "$country <br>";
    if ($country == "EG") break;
}
