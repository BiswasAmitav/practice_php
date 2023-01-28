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




?>
</body>
</html>