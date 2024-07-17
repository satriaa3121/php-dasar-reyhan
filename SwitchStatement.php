<?php
   
   $nilai = "F";

//    if($nilai == "A"){
//     echo "Anda lulus dengan sangat baik" . PHP_EOL;
//    }else if($nilai == "B" || $nilai == "C"){
//     echo "Anda lulus " . PHP_EOL;
//    }else if($nilai == "D"){
//     echo "Anda Tidak Lulus" . PHP_EOL;
//    }else{
//     echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
//    }

   switch ($nilai){
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
        echo "Anda lulus " . PHP_EOL;
        break;   
     case "C":
            echo "Anda lulus " . PHP_EOL;
            break;   
     case "D":
        echo "wkwkwk ga lulus" . PHP_EOL;
        break;
     default:   
     echo "Mungkin Anda Salah Jurusan" . PHP_EOL;       
   }