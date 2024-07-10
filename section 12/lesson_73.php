<?php

/*
Filter functions

- filter_list()
    return a list of all supported filters

- filter_id(filter_name(Required));
    return the id of a given name filter, could be used then in filter_var

- filter_var(Value[Required], Filter[Optional], Options[Optional])
    filters a variable with a specified filter
 */


echo "<pre>";
print_r(filter_list());
echo "</pre>";

echo filter_id("boolean") . "<br>"; // 258

$val = true; // 1, yes, on, true => all will return true

// if (filter_var($val, 258)) {
if (filter_var($val, FILTER_VALIDATE_BOOL)) {

    echo "value is boolean";
} else {

    echo "value is not boolean";
}
