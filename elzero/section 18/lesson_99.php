<?php

/*
    Sessions
    - Advanced Information
    - Edit
    - Views Count
  */

// session files will be found in temp file in XAMPP
// we can make custom id for the session by using function below and should be above the session start
// session_id("our_custom_id");


session_start();

// we can print our session id using the same function
echo "Session id: " . session_id() . "<br>";


$_SESSION['name'] = "Hasan";

// this function will count how many a person visited the page
isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;

echo "Hello " . $_SESSION['name'] . " Views Count Is " . $_SESSION['views'] . "<br>";

echo '<a href="content.php">content</a>';
