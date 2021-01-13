<?php
//session is a way to store users information

//declare session in php
session_start();

$_SESSION['Name']= 'Mark';
$_SESSION['Age']= 22;
$_SESSION['Weight']= 54;


echo "Done";
?>