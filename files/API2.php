<?php

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];

if($b==0){
    $total= "Math error";
}else{
    $total = $a**3 + $b*$c - $a/$b;
}
$result=[
    "total" => $total,
];
echo json_encode($result);
?>