<?php
$fruit =['Orange','Banana','Apple','Jackfruits'];

$veggie = ['carrot','pea'];


$newArray=array_replace($fruit,$veggie);// It's create a new array....It doesn't change on that existing..
print_r($newArray);

?>