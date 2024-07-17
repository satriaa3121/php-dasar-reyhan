<?php
// global keyword

$name = "Reyhan"; //global scope

function sayName()
{
    global $name; //global keyword
    echo "Hello $name" . PHP_EOL;
}

sayName();