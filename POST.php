<?php

$_POST["username"];
$_POST["password"];

if (($_POST["username"]==="mark" )&&( $_POST["password"]==="pass") )
{
    echo "Username and password is correct";
}
else{
    echo "Username and password is not correct";
}
?>