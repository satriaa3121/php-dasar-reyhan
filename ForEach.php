<?php

$names = ["tomy", "elang", "budi"];

for ($i = 0; $i < count($names); $i++) {
    echo "data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Data = $name" . PHP_EOL;
}

$person = [
    "first_name" => "toms",
    "middle_name" => "jaty",
    "last_name" => "nemo"
];

foreach ($person as $key => $value) {
    echo "$key = $value" . PHP_EOL;
}