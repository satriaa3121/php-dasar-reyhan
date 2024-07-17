<?php

 $data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

 var_dump(array_map(fn($data) => $data * 2, $data));

 rsort($data);
 var_dump($data);

 var_dump(array_keys($data));
 var_dump(array_values($data));

$orang = [
    "first_name" => "Reyhan",
    "last_name" => "satria"
];

var_dump(array_keys($orang));
var_dump(array_values($orang));
