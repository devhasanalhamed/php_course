<?php

/*
Functions
- introduction and DRY concept
- parameter
- argument
 */

echo "Hello Hasan <br>";
echo "Hello Mohammed <br>";
echo "Hello Hamed <br>";

function sayHello(int $name)
{
    echo "Hello $name <br>";
}


sayHello("Hasan");
sayHello("Mohammed");
sayHello("Hamed");
