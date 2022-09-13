<?php

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
if($b==0){
    $result= "Math error";
}else{
    $result = $a**3 + $b*c - $a/$b;
}

echo json_encode($result);
?>