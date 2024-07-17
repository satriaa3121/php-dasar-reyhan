<?php

function foo()
{
    echo "Tomi Makan" . PHP_EOL;
}

function bar()
{
    echo "Badak" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();


function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("tomy lemes", "strtoupper");
sayHello("bening icikiwir", "strtolower");