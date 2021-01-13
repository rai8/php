<?php 
/*
Students 
Name Age Weight
Mark 15 78
John 13 65
Tom  14 56


*/

//normal array
$students= array(
    array('Mark', 15, 46), 
    array('John', 13, 46), 
    array('Tom', 15, 56)
);

echo $students[0][0]; //mark
echo $students[1][0]; //john
echo $students[2][0]; //tom

$finalists= array(
    array('Name'=>'Krishna', 
    'Age'=>15, 
    'Weight'=>46), 
    array('Name'=>'John',
    'Age'=> 13,
    'Age'=>46), 
    array('Name'=>'Tom', 
    'Age'=>15, 
    'Age'=>56)

);

echo $finalists[0]['Name']; //mark
//associative array

?>