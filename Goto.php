<?php

// goto a;

// echo "Hello World" . PHP_EOL;

// a: 
// echo "Hello A"  . PHP_EOL;

$counter =1;
while (true) {
    echo "Whil Loop $counter" . PHP_EOL;
    $counter++;
    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop";