<?php
   $values = array(1, 2, 3, 4, 6.5, 7.1);
   var_dump($values);

   $names = ["Reyhan", "Satria" ,];
   var_dump($names);

   var_dump($names[1]);

   $names[0] = "Budi";
   var_dump($names);

   unset($names[0]);
   var_dump($names);

   $names[] = "asep";
   var_dump($names);

   var_dump(count($names));

   $reyhan = array(
    "id" => "Reyhan",
    "name" => "Reyhan Satria",
    "age" => 17,
    "address" => [
      "city" => "Semarang",
      "country" => "Indonesia",   
    ]
   );

   var_dump($reyhan);

   var_dump($reyhan["age"]);

   
   $tomy = [
    "id" => "Thomas",
    "name" => "Thomas Andromeda",
    "age" => 16,
    "address" => [
        "city" => "Semarang",
        "country" => "Indonesia", ] 
   ];

   var_dump($tomy);