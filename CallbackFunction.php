<?php

function sayHello(string $name, callable $filter)
{
    $finalname = call_user_func($filter, $name);
    echo "Hello $finalname" . PHP_EOL;
}

sayHello("Reyhan", function ($name) { return strtoupper($name); });
sayHello("Reyhan", fn($name) => strtoupper($name));
sayHello("Reyhan", "strtoupper");
sayHello("Reyhan", "strtolower");