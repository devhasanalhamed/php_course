<?php

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- [c]
  ------ For Write
  ------ Create If Not Exists
  ------ No Problem If Its Exists
  ------ No Truncation
  ------ Pointer At The Beginning
  --- [c+] For Read and Write

  - file(File[Required], Flag[Optional], Context[Optional])
  --- Read Entire File Into Array
  - feof(File[Required])
  --- Tests For EOF On A File Pointer
 */

//  c mode gives you all features

echo "<pre>";
// file function return every line in an array element
print_r(file("dev.txt"));
echo "</pre>";

// to get all lines in a document
echo count(file("dev.txt")) . "<br>";

$handle = fopen("dev.txt", "c+");

// feof check if we are in the end of file
while (!feof($handle)) {
    echo fgets($handle) . "<br>";
}

fclose($handle);
