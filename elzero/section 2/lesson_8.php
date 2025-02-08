<?php

/*
 Data Types
 String and escaping

 Heredoc
 Nowdoc
 */

// here and now for escaping a large block of codes

// all starts with '<<<' then the name of doc, can be any name
// for here double quot (or without) for now are single quot

$name = "Hasan";

// In here doc parsing is working
echo <<<"Here"
Hello PHP
Special Characters $$$ ' ' ' \\\\ 
Hello my name is $name
Here;

echo "<br>";

// In now there is no parsing
echo <<<'Now'
Hello PHP
Special Characters $$$ ' ' ' \\\\ 
Hello my name is $name
Now;

echo "<br>";

echo "<ul>";
echo "<li>$name</li>";
echo "<li>$name</li>";
echo "<li>$name</li>";
echo "<li>$name</li>";
echo "</ul>";

echo <<<"navLinks"
<ul>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
</ul>
navLinks;


// if we want to move the code block little forward it could be like the 
// code below or it will give an error 
// Invalid body indentation level 
echo <<<"navLinks"
    <ul>
        <li>$name</li>
        <li>$name</li>
        <li>$name</li>
        <li>$name</li>
    </ul>
    navLinks;
