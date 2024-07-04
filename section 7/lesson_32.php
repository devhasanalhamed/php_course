<?php

/*
Control structure
- switch

Syntax
switch(expression){
case1: 
    code block;
case2;
    code block;
Default: 
    code block;
}
 */

$day = "Sat";

switch ($day) {
    case "Sat":
        echo "Hello today is $day we are available 16 hours from 08:00 AM";
        break;
    case "Sun":
    case "Mon":
        echo "Hello today is $day we are available 12 hours from 08:00 AM";
        break;
    case "Tue":
        echo "Hello today is $day we are available 12 hours from 10:00 AM";
        break;
    case "Thu":
        echo "Hello today is $day we are available 24 hours";
        break;
    default:
        echo "No dates available";
}
