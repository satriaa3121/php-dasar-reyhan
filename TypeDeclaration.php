<?php
 
 function sum(int $first, int $last)
{ 
$total = $first + $last;
echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "100");
sum(100, 100);
sum(true, false);
// sum([], []);

function sumALL(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

$values = [10, 20, 30, 40];

sumALL(10, 20, 30 ,40);
sumALL(...[10, 20, 30, 40]);