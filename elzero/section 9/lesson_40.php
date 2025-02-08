<?php

/*
Function
- Advanced examples with parameters and arguments
- Real life example
 */

function sayHello($firstName, $lastName)
{
    echo "Hello $firstName $lastName <br>";
}

sayHello("Hasan", "Al-Hamed");

function deepFreezer($item)
{
    if ($item == "Water") {
        echo "Make $item Ice <br>";
    } elseif ($item == "Coca Cola") {
        echo "Make $item Cold! <br>";
    } elseif ($item == "Fruits") {
        echo "Make $item Fresh! <br>";
    } else {
        echo "Cold $item <br>";
    }
}

deepFreezer("Water");
deepFreezer("Coca Cola");
deepFreezer("Fruits");
deepFreezer("Remote Control");
