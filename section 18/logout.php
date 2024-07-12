<?php

session_start();
// session unset will delete all values in the session
session_unset();
// and session destroy will delete the temp file of the session 
session_destroy();

echo "You are logged out";
