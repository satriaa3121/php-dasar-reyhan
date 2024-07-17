<?php
 
//  $data =[];

//  if (isset($data['action'])) {
//     $action = $data['action'];
//  } else {
//     $action = 'nothing';
//  }

//  echo $action;

$data = [
   "action" => "create"
];
$action = $data['action'] ?? 'nothing';

echo $action; 
 echo "\n";
$data = [];
$action = $data['action'] ?? 'nothing';

echo $action; 