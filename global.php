<?php
$name= 'Mark';

function showName(){

    //make the name a global variable
    global $name;
    echo 'The name of the student is '. $name;
}

showName();
?>