<?php
 
 $sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
 };

 $sayHello("Ganteng");
 $sayHello("tomy");

//  Anonymus Function sebagai argument

function sayGoodBye(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Good Bye $finalname" . PHP_EOL;
}

sayGoodBye("Tomy", function (string $name) {
    return strtoupper($name);

});

// $firstname = "Reyhan";
// $lastname = "satria";

// $sayHelloReyhan = function (){
//     echo "Hello $firstname $lastname" . PHP_EOL;
// };

// $sayHelloEko(); 

// cara di atas gabisa karena variabel gabisa digunakan jadi harus di panggil menggunakan "use"

$firstname = "Reyhan";
$lastname = "satria";

$sayHelloReyhan = function () use($firstname, $lastname) {
    echo "Hello $firstname $lastname" . PHP_EOL;
};

$sayHelloReyhan(); 

