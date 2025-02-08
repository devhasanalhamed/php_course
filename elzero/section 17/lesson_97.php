<?php

/*
    Cookies
        Practice
 */

if (isset($_COOKIE["background_color"])) {
    echo "<style> body { background-color: " . $_COOKIE["background_color"] . " } </style>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("background_color", $_POST["background_color"], strtotime("+5 years"));
    header("Location:" . $_SERVER["REQUEST_URI"]);
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie</title>
</head>

<body>
    <form action="" method="POST">
        <input type="color" name="background_color">
        <input type="submit" value="Choose Color">
    </form>

</body>

</html>