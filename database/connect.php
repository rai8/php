<?php 
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='Spacenet98';


//connect to the database
$conn= new mysqli($mysql_host, $mysql_user, $mysql_password );

//check connection
if ($conn -> connect_error)
{
    die("Connection failed: ". $conn-> connect_error);
}
echo "Connected successfully";


?>