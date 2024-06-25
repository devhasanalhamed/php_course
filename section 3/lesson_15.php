<?php

/*
Pre defined constants [case sensitive]
PHP_Version
PHP_OS_Family
PHP_INT_MAX
DEFAULT_INCLUDE_PATH

Magic constants [case insensitive]
__LINE__
__FILE__
__DIR__

Reversed Keywords
break
clone

Search
PHP predefined constants 
compile time vs runtime
list of reserved words
 */

echo php_uname();
echo "<br>";
echo PHP_VERSION;
echo "<br>";
echo PHP_OS_FAMILY;
echo "<br>";
echo __dir__;
echo "<br>";
echo __LINE__; // line number of the code
echo "<br>";
echo __File__;
echo "<br>";

function hello()
{
    return "hello";
}

echo hello();
