<?php

$str= "I am amitav biswas";

$newstr=chunk_split($str, 3, "---");

echo($newstr);

$amit="Amitav";

echo str_pad($amit,50,"@");
?>