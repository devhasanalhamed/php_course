<?php

/*
التكليف 04

    إستخدم ال Predefined Variables لتطبع القيم التالية
    السطر الأول Document Root
    السطر الثاني Server Name
    السطر الثالث System Root
    السطر الرابع Open SSL Configuration

 */


echo "{$_SERVER["DOCUMENT_ROOT"]} <br>";
echo "{$_SERVER["HTTP_HOST"]} <br>";
echo "{$_SERVER["SystemRoot"]} <br>";
echo "{$_SERVER["OPENSSL_CONF"]} <br>";


 /*
 Needed Output
"C:/xampp/htdocs"
"localhost"
"C:\WINDOWS"
"C:/xampp/apache/bin/openssl.cnf"
  */