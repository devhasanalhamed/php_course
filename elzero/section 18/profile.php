<?php

// to use session values we need the function below

session_start();

echo "Hello, your name is " . $_SESSION["name"] . " your work at " . $_SESSION["job"] . " your balance is 20,000,000,000.00 dollar 🔥.";
