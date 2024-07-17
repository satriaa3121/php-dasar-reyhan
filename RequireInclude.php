<?php

include "Dummy.php";
// bisa juga dengan command required tapi jika required eror panjang jika include eror statement tidak ketemu
echo sayHello("Reyhan", "Satria");
 
var_dump("\n");

// required once dan include once

// contoh salah , include berkali kali
// include "Dummy.php";
// include "Dummy.php";

// echo sayHello("Reyhan", "Satria");

// contoh benar pake include once

include_once "Dummy.php";
include_once "Dummy.php";

echo sayHello("Reyhan", "Satria");
