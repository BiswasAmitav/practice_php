<?php
$a = ["Sanjay","Aman", "Rehman","karan"];

//WE've two methods for searching arrays....
// in_array()..
// array_search()..If it is associative array ..returns key of that array's element ..

if(in_array('Amitav',$a)){
    echo "Find Item";
}else{
    echo "Does not exist";
}



?>