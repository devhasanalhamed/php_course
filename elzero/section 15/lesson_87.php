<?php

/*
  File System Functions

  - file_get_contents(File[Required], Include_Path[Optional], Context[Optional], Start[Optional], MaxLength(Optional))
  --- Reads Entire File Into A String

  - file_put_contents(File[Required], Data[Required], Mode[Optional], Context[Optional])
  --- Write Data To File
  --- Mode
  ------ FILE_APPEND => If File Exists Append To It

  - Create If Not Exists
  - Open And Close
  - Return Number Of Bytes

  Search
  - Get Set Include Path

 */

//  these functions do work of fopen function and they open and close the file automatically

echo get_include_path() . "<br>";

echo file_get_contents("dev.txt") . "<br>";

echo file_put_contents("dev.txt", "\r\nHello World!", FILE_APPEND) . "<br>";

echo file_get_contents("dev.txt") . "<br>";

echo file_get_contents("https://www.youtube.com/") . "<br>";

print_r("https://www.youtube.com/");
