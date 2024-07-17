<?php

//  contoh jika pakai loop /factorial loop

function factorialloop(int $value): int
{
    $total =1;
    for ($i =1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}

var_dump(factorialloop(8)); 
// perkalian faktorial hasilnya sama dengan yg dibawah
var_dump(1 * 2 * 3 * 4 * 5 * 6 * 7 * 8);


// factorial recursive
// konsep nya sama tapi lebih simple jika loop dari angka awal sampai ke value yg ditentukan maka recursive dari value dikalikan turun sampai ke angka 1 

function factorialRecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialrecursive($value - 1);
    }
}

var_dump(factorialRecursive(6));
var_dump(1 * 2 * 3 * 4 * 5 * 6);


