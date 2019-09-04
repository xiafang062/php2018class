<?php 
//isset()：检测变量是否存在
$name = 'admin';
$res = isset($name,$age); 
var_dump($res);  //为假
//目的是防止用户直接访问当前页面，如果直接访问会查不到username下标，结果会报错
$userName = isset($_GET['usernmae']) ? $_GET['username'] : '';
if(isset($name,$age)){
	echo '存在';
}else{
	echo '不存在';
}

unset($name);//unset不止可以删除变量，还可以删除数组中的某个元素
echo $name;
if(isset($name)){
	echo '存在';
}else{
	echo '不存在';
}

$name = 'admin';
if(empty($name)){
	echo '为空';
}else{
	echo '不为空';
}

$age = 18;
$arr = array(1,2,3,4);
echo $name,$age,$arr;  //admin 18


var_dump($name,$age,$arr);