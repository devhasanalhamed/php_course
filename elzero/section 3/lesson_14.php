<?php

/*
Constants
    that value con't be change during the execution
    constants best practice are uppercase
 */

//  use define function to define a constant variable
// name, value, case sensitive
// note: case sensitivity are deprecated
define("DB_NAME", "invoice-app", true);

echo DB_NAME;
