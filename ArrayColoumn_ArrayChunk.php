<?php

$array=array(
    array(
        'id' =>2021,
        'first_name' => 'Amit',
        'last_name' => 'Kapor',
    ),
    array(
        'id' =>2022,
        'fisrt_name'=>'Salman',
        'last_name' => 'Khan',
    ),
    array(
        'id' =>2023,
        'first_name'=>'Johan',
        'last_name'=>'Abraham',
    ),
);

$newArray=array_column($array,'first_name','id');

print_r($newArray);


$cars = ["Volvo","BMW","Tata","Honda","Mercedes","opel","honda"];

$newArray1=array_chunk($cars,3);

print_r($newArray1);





?>