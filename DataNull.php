 <?php 
 $name = "rey";

 $age = NULL;

 echo "Name : ";
 echo $name;
 echo "\n";

 echo "Age : ";
 echo $age;
 echo  "\n";

 echo "Is Name Null? : ";
 var_dump(is_null($name));
 echo "\n";

 $contoh = "tomyy";
 unset($contoh);

$contoh = null;

var_dump(isset($contoh));
