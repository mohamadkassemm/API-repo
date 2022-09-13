<?php

$string = $_GET["text"];
if ($string==strrev($string)){
        echo "palindrome";
}else{
        echo "not palindrome";
}

?>