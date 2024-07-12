<?php

/*
    Sessions
    - Unset And Destroy
    - Login And Logout Simulation
  */

session_start();

if ($_SERVER["REQUEST_METHOD"]  === "POST") {
    if ($_POST["username"]  == "devHasan") {
        $_SESSION["username"] = "devhasanalhamed";
        $_SESSION["id"] = "1907";
    }
}


echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// check if their is any value in the session to hide login form
if (isset($_SESSION["username"])) {
    echo "Welcome " . $_SESSION["username"] . "<br>";


?>

    <a href="logout.php">Logout</a>
<?php } else {


?>

    <form action="" method="POST">
        <input type="text" name="username">
        <input type="submit" value="Login">
    </form>


<?php } ?>