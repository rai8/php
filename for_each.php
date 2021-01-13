<?php
$names= array('Mark', 'John', 'Tom', 'Patrick', 'July');

//display using the for each loop
foreach ($names as $name){
    echo $name .'<br />';
};

$finalists= array(
    array('Name'=>'Krishna', 
    'Age'=>15, 
    'Weight'=>46), 
    array('Name'=>'John',
    'Age'=> 13,
    'Weight'=>46), 
    array('Name'=>'Tom', 
    'Age'=>15, 
    'Weight'=>56)

);

foreach ($finalists as $finalist){
    echo $finalist['Name'].'<br/>';
    echo $finalist['Age'].'<br/>';
    echo $finalist['Weight'].'<br/>';
}
?>