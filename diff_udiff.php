<?php

$a1 = array("a"=>"reed", "b"=>"green", "e"=>"blue", "d"=>"Amita");

$a2 = array("a"=>"reed", "b"=>"green", "d"=>"dipto");

$a3 = array("a"=>"reed", "b"=>"green", "d"=>"dipto","e"=>"Akhankha");



$newArray= array_diff($a1,$a2,$a3);// This function will find the difference  value and it returns inside a array 


print_r($newArray);



// How to compare the multiple array values 



?>
