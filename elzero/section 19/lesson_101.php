<?php

/*
    Header
    - Send RAW HTTP Header To Client To Manipulate Info Sent By Web Server Before Any Output
    - You Can Use To Control Cache Or Force File Download

    header(Header[Required], Replace[Optional] = True, Response_Code[Optional])
  */

// will send header that tells the page are not found
// header("HTTP/1.0 404 Not Found");

// telling when the cache will expire
// header("expires: Sat, 01 Jan 2025 00:00:00 GMT");

// telling cache are not allowed
// header("Cache-Control: no-cache, must-revalidate");

// Usually will use the header to redirect, remember to always use exit after the redirect

// header("Location: redirect.php");
// exit();


// we can use header with timer 
header("Refresh: 5; URL=redirect.php");
exit();

// the difference between header and a tag is that header will redirect not leaving any history to go back 