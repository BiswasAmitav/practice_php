<?php
// In php we have 7 different types of data ....
//like 

/*1. String 
2. Interger 
3. Float 
4. Boolean 
5. Array 
6. Object 
7. Null */

//Lets introduce arrays ....
$colors = array("red", "green", "blue", "purple", "orange", "gray", "yellow"); // It can store multiple types of variable ...
// echo $colors[1];


// echo "<pre>";
// print_r($colors);
// echo "</pre>";




// Types of array in php ....

//1. Indexed Based array 
$colors = array(
    "red",
    "green",
    "blue"
);

// foreach($colors as $value){
//     echo $value. " ";
// }


//2. Associative Array 

$age = array(
    "Bill"=> 100,
    "Amitav"=> 23,
    "Rahul"=> 24
);


foreach($age as $key => $value){
    echo "$key = $value <br>";
}

?>