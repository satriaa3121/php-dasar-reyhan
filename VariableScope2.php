<?php

function createname()
{
    $name = "Reyhan"; // local scope
}

createname();
echo $name . PHP_EOL; //eror

//harus dari dalam function
