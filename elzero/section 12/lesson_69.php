<?php

/*
Math functions

- abs(Number[Required])
    - Return the absolute value of a number

- mt_rand(Number[Optional], Number[Optional])  || rand(min[Optional], max[Optional])
    - mt_getrandmax() => show largest possible random value
    - Generate random value via the mersenne twister algorithm

- intdiv(Number(dividend)[Required], Number(divisor)[Required])
    - Integer division
    - intdiv  vs / 

- fmod(Number(dividend)[Required], Number(divisor)[Required])
    - Floating point division
    - fmod vs %
 */


echo abs(-100) . "<br>";
echo abs(-21.5) . "<br>";


echo mt_rand(0, 100) . "<br>";
echo rand(0, 100) . "<br>";
echo rand(-10, 10) . "<br>";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . "<br>";


echo 21 /  2 . "<br>";
echo intdiv(21, 2) . "<br>";


echo 21.9 %  10 . "<br>";
echo fmod(21.9, 10) . "<br>";
