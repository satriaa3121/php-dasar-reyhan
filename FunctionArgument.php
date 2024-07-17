<?php

function sayHello($firstname = "Anonymus", $lastname = "")  
{
    echo "Hello $firstname $lastname" . PHP_EOL;
}

sayHello("Tomy");
sayHello("Bening");
sayHello("tomy", "bening"); 