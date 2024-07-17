<?php
$first = [
    "first_name" => "Thomas"
];

$mid = [
    "mid_name" => "Elang"
];

$last = [
    "last-name" => "Andromeda"
];

$full = $first + $mid + $last;
var_dump($full);

$a = [
    "first_name" => "tomy",
    "last-name" => "elang"
];

$b = [
    "last_name" => "elang",
    "first_name" => "tomy"
];

var_dump($a == $b);
var_dump($a === $b);

