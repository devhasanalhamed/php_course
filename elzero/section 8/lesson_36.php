<?php


/*
Control structure
- foreach loop
 */

$countries = array("SA", "EN", "US", "UAE", "IR", "JP");

echo "All countries";
echo "<br>";
// echo "<pre>";
// print_r($countries);
// echo "</pre>";

foreach ($countries as $country) {
    echo "$country <br>";
}


$countries_with_discount = array("SA" => 100, "UAE" => 100, "JP" => 10);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Countries with discount";
echo "<br>";
// echo "<pre>";
// print_r($countries_with_discount);
// echo "</pre>";

foreach ($countries_with_discount as $country => $discount) {
    echo "Country: $country (حي عييييييينك ❤️) your discount is: " . $discount . "% <br>";
}
