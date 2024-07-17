<?php
//static scope

function increment()
{
    static $counter = 5;

    echo "Counter = $counter" . PHP_EOL;
    
    $counter++;
}

increment();
increment();
increment();
increment();
increment();
