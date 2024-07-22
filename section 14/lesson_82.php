<?php

/*
File system functions

- Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

    Mode
    [r] for read => pointer at the beginning
    [r+] for read and write => pointer at the beginning
    [w] for write => pointer at the beginning + truncate to 0 length => create if not exists
    [w+] for read and write => pointer at the beginning + truncate to 0 length => create if not exists

    fgets(FileHandle[Required], Length[Optional])
        get a line from an open file
        length => number of bytes to read || end of line if no length
    
    fread(FileHandle[Required], Length[Required])
        get a data from an open file
        length => maximum number of bytes to read

    fclose(File[Required])
        close an open file
 */

// file open function will open a file or create for you depending on the mode
// it's very powerful function

// 
$handle = fopen("dev.txt", "r");

// fgets will read a line from the file, then will move the pointer to next line
// we can specify a limit of bytes to read from
echo fgets($handle);
echo "<br>";

fclose($handle);


$handle = fopen("dev.txt", "r");

// fread will read the whole file and the maximum bytes length are required
// if the length is larger of the file no problem it can read the file
echo fread($handle, 1024);
echo "<br>";

// you should always close the file after finish
fclose($handle);

// using mode w will truncate which means it will delete the file and start over
// $handle = fopen("dev.txt", "w+");

// echo fread($handle, 1024);

// fclose($handle);
