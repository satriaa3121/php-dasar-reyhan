<?php
 
 //continue
for ($counter = 0; $counter <= 100; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    } 
    echo "allohaaa" . $counter . PHP_EOL;
}
