<?php

session_start();


isset($_SESSION["views"]) ? $_SESSION["views"] += 1 : $_SESSION["views"] = 1;

echo "Hello {$_SESSION["name"]} your visits are {$_SESSION["views"]} times";
