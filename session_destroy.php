<?php 

//remmove session
session_start();
unset ($_SESSION['Name']); //destroy a  specific session
//session_destroy();
?>