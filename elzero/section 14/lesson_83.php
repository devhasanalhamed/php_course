<?php

/*
File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- Mode

  --- [a] For Write => Pointer At The End + Create If Not Exists
  --- [a+] For Read & Write => Pointer At The End + Create If Not Exists
  --- [x] Create + Open For Write => Pointer At The Beginning
  --- [x+] Create + Open For Read & Write => Pointer At The Beginning

  - fwrite(File[Required], String[Required], Length[Optional])
  --- Write To An Open File
  --- Length => Maximum Number Of Bytes To Write
 */

$handle = fopen("dev.txt", "a+");

// length of written bytes length in fwrite is optional
fwrite($handle, "\r\nI can do it.");


fclose($handle);


$handle = fopen("dev.txt", "a+");

echo fread($handle, 1024);

fclose($handle);

// to create a file then open it to write
// $handle = fopen("dev.txt", "x+");

// fclose($handle);
