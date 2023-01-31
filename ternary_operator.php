<?php
// $a=10;

// ($a>20)? $z ="Greater" : $z = "Smaller";

// echo "$z";



// More shorter ....
$a=10;
//$z=($a<20)? "Greater" : "Smaller";//It is not mandatory that condiotn we've to write inside brackets ...without brackets it also works fine..Like below
$z=$a<20? "Greater" : "Smaller";

echo " $z";


// $name="Amitav";

// ($name=="Amitav")? $res="Matched" : $res="Does not match";

// echo "$res";




$name="Amitav";
$res=($name=="Amitav")? "Matched" : "Does not match";
//Alternative Without brackets ...

echo " $res";

?>