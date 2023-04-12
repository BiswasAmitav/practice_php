<?php
    $color = ["Red", "Green", "Yellow", "orange", "Brown", "lemon"];

    $newArray = array_rand($color,2);

    print_r($newArray);
    echo "<br>";
    echo $color[$newArray[0]] . "<br>";
    echo $color[$newArray[1]];

?>