<?php 
//比较运算符
$a = 1;
$b = 1;
if($a > $b){
	echo '为真';
}else{
	echo '为假';
}

$a = 1;
$b = 1;
if($a < $b){
	echo '为真';
}else{
	echo '为假';
}
$a = 1;
$b = 1;
if($a <= $b){
	echo '为真';
}else{
	echo '为假';
}
$a = 1;
$b = true;
if($a == $b){
	echo '为真';
}else{
	echo '为假';
}
$a = 1;
$b = true;
if($a === $b){ //比较的类型和值
	echo '为真';
}else{
	echo '为假';
}

$a = 0;
$b = '';
if($a == $b){
	echo '为真';
}else{
	echo '为假';
}


 ?>