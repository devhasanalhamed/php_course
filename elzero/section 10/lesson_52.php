<?php

/*
String functions
- chunk_split(String[Required], Length[Optional], End[Optional])
- strlen(String[Required])
- str_split(String[Required], Length[Optional])
- strip_tags(String[Required]. Allowed[Optional])
- nl2br(String[Required], Xhtml[Optional])
 */

//  if length not specified the default is one chunk 
echo chunk_split("Hasan Code School") . "<br>";
echo chunk_split("Hasan Code School", 3, "-") . "<br>";

// string split will return an array from a string and we can define
// each array element length in the second argument
echo "<pre>";
print_r(str_split("Hasan Code School"));
echo "</pre>";
echo "<pre>";
print_r(str_split("Hasan Code School", 2));
echo "</pre>";

echo "<div><h3><i>Hello World!</i></h3></div>" . "<br>";
// stripping tags will remove all the html tags from the string
// we can specify in the second argument the allowed tags that wouldn't be removed
// allowed tags could be giving like <i><div><h3> or <i>, <div>, <h3> 
echo strip_tags("<div><h3><i>Hello World!</i></h3></div>", "<i>") . "<br>";


echo nl2br("Hasan\nSchool\nCode") . "<br>";

// second argument is about xhtml use, by default it's true and will create
// self closed break tags <br/>
echo nl2br("Hasan\nSchool\nCode", false) . "<br>";
