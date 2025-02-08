<?php

/*
File system functions

these are functions to control the directory permissions
but in windows they are ignored, so we need a server linus or linux system

- chmod(File[Required], Mode[Required])
    Change mode

- fileperms(Name)
    gets file permissions

- clearstatcache()
    clear cache

- you can change owner chown()
- you can change group chgrp()
 */

// mkdir("dev", 0700);

// file permission function will return the mode or permission of a file as a 
// number then that number can be converted to a octal to read permissions
echo decoct(fileperms("dev")) . "<br>"; // 40777 [4: directory] [0 octal] [7 owner read write execute]

// change mode
chmod("dev", 0644);

// if we didn't clear the cache it will return the same previous number
clearstatcache();
echo decoct(fileperms("dev")) . "<br>";
