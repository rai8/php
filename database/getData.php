<?php
require 'connect.php';

//query to get data from the database

$query= "SELECT * FROM `user_info`";
if($is_query_run= mysqli_query($conn, $query))
{
 //echo "query executed";
// get data now from the database


while ($query_execute= mysqli_fetch_assoc($is_query_run))
{
echo 
'<table border=1 style="width:300px">'.
'

<tr>
   <td>'.$query_execute['Name'].'</td>
   <td>'.$query_execute['Surname'].'</td>
   <td>'.$query_execute['Username']. '</td>
</tr>
'.'</table>';

//echo $query_execute['Name']. "<br />";
}

}
else{
    echo "query not executed";
}

?>