<?php
$name = "Reyhan Satria Putra";

echo "name : " . $name . PHP_EOL;
echo "value : " . 400 . PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"alamak";
var_dump($valueInt);

$valueFloat = (float)"5,11";
var_dump($valueFloat);


$name = "Satria";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;

echo "haloo " . $name . ", Selamat makann" . PHP_EOL; 
echo "haloo $name, Selamat makan" . PHP_EOL;
echo "haloo {$name}s, Selamat makan" . PHP_EOL;

$goll = "tomy";
echo "halo namaku {$goll}s" . PHP_EOL;
