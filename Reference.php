<?php
//memanggil variabel yang sama dengan nama yang beda

// php reference bisa memungkinkan kita membuat banyak variable menuju ke value yang sama


//assign by reference
$name = "Reyhan";

$otherName = &$name;
$otherName = "Satria";

echo $name . PHP_EOL;


//pass by reference

function increment(int &$value)
{
    $value++;
}

$counter =1;
increment($counter);

echo $counter . PHP_EOL;

//untuk reference kuncinya adalah &
//counter nya 1 lalu increment dikirim ke value lalu di naikan dan jadi bertambah

//returning reference
function &getValue()
{
    static $value = 100; 
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;
