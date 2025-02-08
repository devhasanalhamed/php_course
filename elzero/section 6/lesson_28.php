<?php

/*
Control structure
If, Elseif, Else => Advanced Practice

30% to 60%
 */

// the condition will only show the values when there is a post method
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // nested if
    if ($_POST['lang'] == 'ar') {
        header("Location: ar.php");

        exit(); // for the script because it will change to another page
    } elseif ($_POST['lang'] == 'en') {
        header("Location: en.php");

        exit();
    } elseif ($_POST['lang'] == 'sp') {
        header("Location: sp.php");

        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="username">
        <select name="lang">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="sp">Spanish</option>
        </select>
        <input type="submit" value="Go">
    </form>
</body>

</html>