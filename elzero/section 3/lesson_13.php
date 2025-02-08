<?php

/*
Predefined variables
are variables that are pre defined by php and provide a lot of functionality 
and information about server, connection, etc.
 */

echo "<pre>";
// echo print_r($_SERVER);
echo "</pre>";
echo $_POST["username"];
echo "<br>"
?>

<form action="" method="post">
    <input type="text" name="username">
    <input type="submit" name="send">
</form>

<?= $_GET["password"] ?>

<form action="" method="get">
    <input type="text" name="password">
    <input type="submit" name="send">
</form>