<?php


$fruits = ['a'=>"Ornage", 'b'=>"Banana", 'c'=>"Grapes"];

$veggie = ['b'=>'carraot','c'=>'pea','a'=>55,101];//When you putted same key will be replace into first value
$newArray = array_merge($fruits, $veggie);

print_r($newArray);



?>