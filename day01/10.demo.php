<?php 
//
$name = 'admin';
$age = 18;
$sex = 1;

var_dump($GLOBALS);
echo $GLOBALS['name'];

function abc(){
	echo $GLOBALS['name'];
}
abc();
