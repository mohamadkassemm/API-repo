<?php

$password=$_GET["pass"];

if (strlen($password)>12 & preg_match('/[A-Z]/', $password) & preg_match('/[a-z]/', $password) & preg_match('/[1-9]/', $password)){
    echo "Your password is :Strong password";
}else{
    echo "Your password is :Weak password";
}

?>