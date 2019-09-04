<?php 
//变量的作用域
//全局变量
$name1 = 'admin1';   //全局变量，不能在函数内部使用，原因是存储位置不一样。
echo $name1;
//局部变量
function user(){
	//echo $name;  //不能使用全局变量
	$name2 = 'admin2';  //局部变量不能在外部使用
	echo $name2;
}
user();
echo $name2;

//静态变量
static $age = 18;  //在全局是不起作用的。
$age++;
echo $age;
$age++;
echo $age;
$age++;
echo $age;
$age++;
echo $age;
function age1(){
	static $age = 18; //static就是静态变量的声明方式，静态变量声明后运行完当前页面不再销毁这个变量，而是保留。
	echo $age;
	$age++;
}
age1();   //18
age1();   //19
age1();   //20
age1();   //21
age1();   //22
echo '<hr>';
//局部转全局
//global $sex;  这种方式不行
//global $sex = '男';  //这种方式不行
$sex = '男';
function admin($sex){
	global $name,$sex;  //声明为全局变量
	$name = 'admin';
	echo $sex;
}
admin($sex);
echo $name;
?>
