<?php


date_default_timezone_set("Asia/Kolkata");
echo date_default_timezone_get(). "<br>";


$tz = timezone_open("Asia/Kolkata");
echo timezone_name_get($tz);

// $tz_location=timezone_location_get($tz);
// echo $tz_location;

print_r(timezone_location_get($tz));

print_r(timezone_identifiers_list());
?>
