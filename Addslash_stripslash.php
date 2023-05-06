<?php

$str="Hello I am 'Amitav Biswas' ";

echo $str . "<br>";

$newStr= addcslashes($str,"A..Z"); //It adds slashes to the value which inside the Quation. 

echo $newStr;

echo stripslashes($newstr); 

?>