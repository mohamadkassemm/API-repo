<?php

$string = $_GET["text"];
if ($string==strrev($string)){
        $result= "palindrome";
}else{
        $result = "not palindrome";
}
echo json_encode($result);
?>