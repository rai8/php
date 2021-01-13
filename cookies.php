<?php
//used to identify a given user

//setcookie(name, value, expire, path, domain);
$time= time();
echo $time;
setcookie('student', 'Mark', $time +10 ) //expires after 10 seconds

?>