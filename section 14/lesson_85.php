<?php

/*
File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  - rewind(File[Required])
  --- Return The Pointer To The Beginning Of The File

  - ftell(File[Required])
  --- Return Current Position Of The Pointer

  - fseek(File[Required], Offset[Required], Whence[Optional] = SEEK_SET)
  --- Go To A Position
  --- Offset In Bytes
  --- SEEK_SET => Equal To Offset
  --- SEEK_CUR => Current + Offset
  --- SEEK_END => EOF + Offset [Accept Negative]
 */

$handle = fopen("dev.txt", "c+");

echo "current pointer at: " . ftell($handle) . "<br>";

echo fgets($handle) . "<br>";

// the [position] of the pointer is equal to all the previous passed bytes 
echo "current pointer at: " . ftell($handle) . "<br>";


echo fgets($handle) . "<br>";

// return the pointer to beginning
rewind($handle);

echo fgets($handle) . "<br>";

rewind($handle);

// we can flag this function to calculate the position from start or current pointer
// also we can flag from the end
// let's try to but our pointer to the second line how is that possible?
// by calculating the first line bytes using mb function
echo mb_strlen("Hello\r\n") . "<br>"; // 7

// now let's move the pointer 7 bytes
fseek($handle, 7);

// now we can print the second line direct
echo fgets($handle) . "<br>";


// we can use the offset by negative
fseek($handle, -6, SEEK_END);
echo mb_strlen(" 🦄") . "<br>";
echo ftell($handle) . "<br>";
echo fgets($handle) . "<br>";
echo ftell($handle) . "<br>";



fclose($handle);
