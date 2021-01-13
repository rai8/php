<?php 
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='Spacenet98';
$database_name= 'student';


//connect to the database
$conn= new mysqli($mysql_host, $mysql_user, $mysql_password ,$database_name);

//check connection
if ($conn -> connect_error)
{
    die("Connection failed: ". $conn-> connect_error);
}
else{

    //echo "Connected successfully";
}



?>