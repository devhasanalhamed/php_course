<?php

/*
File system functions

- disk_total_space()
    get total space in bytes => then we can get [KB, MB, GB]
    
- disk_free_space() || diskfreespace()
    get free space in bytes => then we can get [KB, MB, GB]

- file_exists(Path)
    check if a file or directory exists

filesize(File_Name)
    get space in bytes
 */

function convertSize(int $size, String $unit = "GB")
{
    switch (strtoupper($unit)) {
        case "B":
            return $size / 8;
        case "KB":
            return round($size / 1024);
        case "MB":
            return round($size / 1024 / 1024);
        default:
            return round($size / 1024 / 1024 / 1024);
    }
}

echo convertSize(disk_total_space("C:")) . "<br>";
echo convertSize(disk_free_space("C:")) . "<br>";

echo convertSize(disk_total_space("G:")) . "<br>";

if (file_exists("dev.txt")) {
    echo convertSize(filesize("dev.txt"), "b") . "<br>";
}
