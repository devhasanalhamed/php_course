<?php

/*
Array functions

- array_map(Callback[Required], Array[Required])
    - Apply a callback function to every element in an array

- array_filter(Array[Required], Callback[Optional], Flags[Optional])
    - Filter the elements in an array
        - Callback function must return true or false
        - If the callback function return true, the element will be included in the new array
        - Flags
            - ARRAY_FILTER_USE_KEY
            - ARRAY_FILTER_USE_BOTH
            - 0 default => send value as arguments
 */

$first_names = ["Fatima", "Hasan", "Saleh", "Maha", "Mohammed", "Abeer"];

$last_names = ["Al-Ahmed", "Al-Nahdi", "Al-Menhali", "Al-Rouqi", "Al-Qasimi", "Barakat"];

function greetings($first_name, $last_name)
{
    return "Hello $first_name $last_name";
}

echo "<pre>";
print_r(array_map("greetings", $first_names, $last_names));
print_r(array_map(fn ($first_name, $last_name) => "Ya marhaba $first_name $last_name", $first_names, $last_names));
echo "</pre>";


$reading_club = ["Saleh" => 18, "Fatima" => 12, "Maha" => 8, "Hasan" => 11, "Abeer" => 20];

function is_adult($age, $name)
{
    return $age >= 18 || $name == "Maha";
}

echo "<pre>";
print_r(array_filter($reading_club, "is_adult", ARRAY_FILTER_USE_BOTH));
echo "</pre>";
