<?php


/*
  File System Functions

  - glob(Pattern[Required], Flags[Optional])
  --- Find Pathname Matching A Pattern And Return Array

  - rename(Old[Required], New[Required]) => Move
  --- Renames A File Or Directory

  - copy(Old[Required], New[Required], Context[Optional])
  --- Copy A File

  - unlink(File[Required], Context[Optional])
  --- Delete A File

  Same Concept
  - opendir()
  - readdir()
  - closedir()

 */

echo "<pre>";
// return an array => takes the path and the file names and extension
print_r(glob("archive/*.*"));
echo "</pre>";

// we can rename with moving to another location or just moving with the same name
// rename
rename("archive/flutter.txt", "archive/flutter_dart.txt");

echo "<pre>";
print_r(glob("archive/*.*"));
echo "</pre>";

// move
rename("archive/flutter_dart.txt", "workstation/flutter_dart.txt");


// copy without naming
// we can also copy with renaming
copy("workstation/flutter_dart.txt", "archive/flutter_dart.txt");

foreach (glob("archive/*.*") as $path) {
    copy($path, "workstation/" . basename($path));
}

echo "<pre>";
print_r(glob("workstation/*.*"));
echo "</pre>";

foreach (glob("workstation/*.*") as $path) {
    // unlink will delete the files 
    unlink($path);
}

echo "<pre>";
print_r(glob("workstation/*.*"));
echo "</pre>";
