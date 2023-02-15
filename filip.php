<?php

$a = array(
    "Amitav"=>23,
    "Joe"=>20,
    "Peter"=>25,
    "Protap"=>37,
);


//$new_array=array_flip($a);// It's changes the array keys to value and values to keys

$new_array1=array_change_key_case($a,CASE_UPPER);

print_r($new_array1);
?>
