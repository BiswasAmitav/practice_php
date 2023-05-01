<?php
//It just count the length of the string..
$a= "Amitav Biswas";
echo strlen($a) . "<br>";


//word count in a string
$a ="Hello World programmer";
echo "There're ". str_word_count($a). " that string";

$word_count_array=str_word_count($a,1);

print_r($word_count_array);

//How many times specific words presents in string or array ..



?>