<?php

/*
Control structure
- for loop

for (initialize; condition; operation{runs after code applied}){
    block of code.
}

Initialize once at the first of the code
For each iteration it will check the condition 
At the end of each iteration it will run the operation
 */

for ($i = 1; $i < 5; $i++) {
    if ($i == 2) continue;
    echo "Hello World! ($i)" . "<br>";
}

// alternative syntax

// for ($i = 1; $i < 5; $i++) :
//     echo "<br>";
// endfor;

// or for(;;) and we make the controllers outside
