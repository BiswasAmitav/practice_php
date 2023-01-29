<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$degrees = "95";
$hot = "yes";


$a=3 ;
$b=10;
// if(($degrees>100)&&($hot=="yes")){
//     echo " <p> Test : 1 It's <strong>really </strong> hot ! </p>";
// }else{
//     echo " <p> Test : 1 It's bearable . </p>";
// }


if(($degrees>100)||($hot=="yes")){
    echo " <p> Test : 1 It's <strong>really </strong> hot ! </p>";
}else{
    echo " <p> Test : 1 It's bearable . </p>";
}



if($a<$b){
    echo " A is smaller ";
}


$age=20;

if($age>=18 && $age<=21){// we csn write and at the place of &&....
    echo " you are eligible";
}


// xor operator ...

if($age>=18 xor $age<=21){//while both conditions are true it will print nothing ..
    echo " you are eligible";

}
// In xor operation while one condition is ture it will print output ..


//if()


?>
</body>
</html>