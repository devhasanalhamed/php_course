<?php

/*
File system functions

- basename(Path[Required], Suffix[Optional])
    returns trailing name component of path

- dirname(Path[Required], Levels[Optional] = 1)
    return a parent directory's path
    levels => number of parent directories to go up

- realpath(Path[Required])
    return absolute path

- pathinfo(Path[Required], Flags[Optional]) => return array
    PATHINFO_DIRNAME
    PATHINFO_BASENAME
    PATHINFO_EXTENSION
    PATHINFO_FILENAME
 */

// basename will return the file name from a path
echo basename("lesson_81.php") . "<br>";

// we can use also the full path constant 
echo basename(__FILE__) . "<br>";

// we can add a suffix to be removed from basename
echo basename(__FILE__, ".php") . "<br>";


// the level is how much we want to go up, can't be less than one
echo dirname(__FILE__, 1) . "<br>";

// realpath will return the whole path of a file
echo realpath("lesson_81.php") . "<br>";

echo realpath(__FILE__) . "<br>";

// pathinfo will return all information of our file in an array if no flags
// if we used the flag it will return our flag single value
echo "<pre>";
print_r(pathinfo(__FILE__));
echo "</pre>";

// we can use [] to access value because it's an array
echo pathinfo(__FILE__)["extension"] . "<br>";

// or use flag
echo pathinfo(__FILE__, PATHINFO_EXTENSION) . "<br>";
