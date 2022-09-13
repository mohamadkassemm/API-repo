<?php

$password=$_GET["pass"];

if (strlen($password)>12 & preg_match('/[A-Z]/', $password) & preg_match('/[a-z]/', $password)){
    echo "Strong password";
}

?>