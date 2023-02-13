function compare($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a > $b) ? -1 : 1;
}

$a1 = array ("a"=>"Red", "b"=>"Green", "c"=>"blue", "d"=>"yellow");
$a2 = array ("a"=>"Red", "b"=>"Green");

