<?php

/*
Control structure
    - If, Else if, Else => Real life examples
*/

// If


$page = "Home";

if ($page == "About") {
    echo "This is about page";
}

echo "<br>";


// Else if

$title = "Home";

if ($title == "") {
    echo "Unknown page";
} else {
    echo $title;
}

echo "<br>";


// If, Else if, Else

$language = "Arabic";

if ($language == "English") {
    echo "Hello";
} else if ($language == "Spanish") {
    echo "Hola";
} else if ($language == "French") {
    echo "Bonjour";
} else if ($language == "Arabic") {
    echo "مرحباً";
} else {
    echo "Unknown page";
}
