<?php

/*
File system functions

- is_dir(Name)
    tells if the filename is a directory

- mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
    - Permissions is ignored on windows
    - Permissions is octal number starts with 0
        - second number is => owner permission
        - third number is => user group permission
        - fourth number is => others permissions
- rmdir(Name[Required], Context[Optional])

Search 
0777 permissions
 */

var_dump(is_dir("dev.txt"));
echo "<br>";

// recursive will create the path for automatically if not found
if (!file_exists("test")) mkdir("test", 0777, true);

// if (is_dir("test")) {
//     echo "directory found!" . "<br>";
//     for ($i = 0; $i < 10000; $i++) {
//         mkdir("test/$i");
//     }
// }

// remove directory will remove if it's empty

// if (is_dir("test")) {
//     echo "directory found!" . "<br>";
//     for ($i = 0; $i < 10000; $i++) {
//         rmdir("test/$i");
//     }
// }
