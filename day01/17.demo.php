<?php 
//魔术常量
//__LINE__：获取当前行号
echo __LINE__;
echo '<hr>';
//__FILE__:	完整路径和文件名
echo __FILE__;
echo '<hr>';
//__DIR__：文件所在的目录
echo __DIR__;
echo '<hr>';

//__FUNCTION__：获取当前函数的名称
//自动加载--
function abc1(){
	echo __FUNCTION__;
}
abc1();


//__CLASS__：获取当前类名
//文件名叫：getUserClass.php
class getUser  {
	function index(){
		include './xxx/index.html';
	}
	function add(){
		include './xxx/index.html';
	}
}
//mvc:URL传递数据，index.php?c=getUser&a=xxx&m=index
echo '<hr>';
//rand()函数
$num = rand(1,5);
echo $num;
