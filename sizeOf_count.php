<?php
$food = array('orange', 'mango', 'banana', 'jackfruit');

//echo sizeof($food);


// $food = array(
//     'fruits' => array('orange', 'mango', 'banana', 'jackfruit'),
//     'veggie' => array('carrot','collard','pea')

// );

//echo sizeof($food);


echo count($food);
echo "<br />";
$len = count ($food,1);//$len = count($food['fruits'],1);..It's for inside fruits..if we want to <access class=""></access>
echo $len. "<br>";


for($i=0;$i<$len;$i++){
    echo $food[$i] . "<br>";
}

?>